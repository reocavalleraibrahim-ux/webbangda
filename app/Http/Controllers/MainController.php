<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Berita;
use App\Models\Master;
use App\Models\Kategori;
use App\Models\Dokumen;
use App\Models\Whistle;

class MainController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $visi = Master::where(['header' => 'visi'])->first();
        $misi = Master::where(['header' => 'misi'])->first();
        $berita = Berita::limit(6)->orderBy('id','desc')->get();
        $kategori = Kategori::rightJoin('dokumen','dokumen.kategori','=','kategori.id')->get();
        return view('index',compact('slider','berita','visi','misi','kategori'));
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function allBerita()
    {
        $slider = Slider::all();
        $berita = Berita::orderBy('id','desc')->paginate(6);
        $kategori = Kategori::all();
        return view('berita',compact('berita','slider','kategori'));
    }

    public function detailBerita(String $id)
    {
        $berita = Berita::where(['id' => $id])->first();
        $kategori = Kategori::all();
        return view('detail_berita',compact('berita','kategori'));
    }

    public function dok(String $id)
    {
        $kategori = Kategori::all();
        $kat = Kategori::where(['id' => $id])->first();
        $dokumen = Dokumen::where(['kategori' => $id])->get();
        return view('dok',compact('kategori','kat','dokumen'));
    }

    public function whistle_blowing()
    {
        $kategori = Kategori::all();
        return view('whistle_blowing',compact('kategori'));
    }

    public function formWbs()
    {
        $kategori = Kategori::all();
        return view('form_wbs',compact('kategori'));
    }

    public function kirimWbs(Request $request)
    {
        $request->validate([
            'nama_pelapor'      =>  'required|string',
            'no_identitas'      =>  'required|numeric',
            'alamat'            =>  'required|string',
            'pekerjaan'         =>  'required|string',
            'nomor_kontak'      =>  'required|numeric',
            'uraian_aduan'      =>  'required|string',
            'bukti_dukung'      =>  'required|mimes:pdf,jpg,png'
        ]);

        $uploadPath = $request->file('bukti_dukung')->store('aduan','public');

        $data = [
            'nama_pelapor'      =>  $request->nama_pelapor,
            'no_identitas'      =>  $request->no_identitas,
            'alamat'            =>  $request->alamat,
            'pekerjaan'         =>  $request->pekerjaan,
            'nomor_kontak'      =>  $request->nomor_kontak,
            'uraian_aduan'      =>  $request->uraian_aduan,
            'bukti_dukung'      =>  $uploadPath
        ];

        Whistle::create($data);

        return redirect('/messageWbs')->with('success','Berhasil Mengirimkan Aduan');
    }

    public function messageWbs()
    {
        $kategori = Kategori::all();
        return view('message_wbs',compact('kategori'));
    }

    public function dokumen()
    {
        $kategori = Dokumen::leftJoin('kategori','dokumen.kategori','=','kategori.id')->get();
        return view('dokumen',compact('kategori'));
    }

    public function kategori($id)
    {
        $kategori = Kategori::all();
        $kat = Kategori::where(['id' => $id])->first();
        $data = Dokumen::where(['kategori' => $id])->get();

        return view('kategori',compact('kategori','data','kat'));
    }
}
