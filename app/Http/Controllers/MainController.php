<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Berita;
use App\Models\Master;
use App\Models\Kategori;
use App\Models\Dokumen;

class MainController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $visi = Master::where(['header' => 'visi'])->first();
        $misi = Master::where(['header' => 'misi'])->first();
        $berita = Berita::limit(6)->orderBy('id','desc')->get();
        $kategori = Kategori::all();
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
        return view('detailBerita',compact('berita','kategori'));
    }

    public function dok(String $id)
    {
        $kategori = Kategori::all();
        $kat = Kategori::where(['id' => $id])->first();
        $dokumen = Dokumen::where(['kategori' => $id])->get();
        return view('dok',compact('kategori','kat','dokumen'));
    }
}
