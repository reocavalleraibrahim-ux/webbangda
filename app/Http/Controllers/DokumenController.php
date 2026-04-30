<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\Kategori;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'Dokumen';
        $dokumen = Dokumen::all();

        return view('dashboard.dokumen.main',compact('page','dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Dokumen';
        $kategori = Kategori::all();
        $act = 'create';
        
        return view('dashboard.dokumen.form',compact('page','kategori','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen'      =>  'required|string',
            'dokumen'           =>  'required|mimes:pdf',
            'kategori'          =>  'required|string',
            'tahun'             =>  'required|numeric'
        ]);

        $uploadPath = $request->file('dokumen')->store('dokumen','public');

        Dokumen::create([
            'nama_dokumen'  =>  $request->nama_dokumen,
            'dokumen'       =>  $uploadPath,
            'kategori'      =>  $request->kategori,
            'tahun'         =>  $request->tahun
        ]);

        return redirect('/dokumen')->with('success','Berhasil menambahkan dokumen publik');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = 'Dokumen';
        $kategori = Kategori::all();
        $dokumen = Dokumen::where(['id' => $id])->first();
        $act = 'edit';
        
        return view('dashboard.dokumen.form',compact('page','kategori','act','dokumen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_dokumen'      =>  'required|string',
            'dokumen'           =>  'mimes:pdf',
            'kategori'          =>  'required|string',
            'tahun'             =>  'required|numeric'
        ]);
            
        $dokumen = Dokumen::where(['id' => $id]);

        if($request->hasFile('thumbnail')){
        $uploadPath = $request->file('dokumen')->store('dokumen','public');

        
        $dokumen->update([
            'nama_dokumen'  =>  $request->nama_dokumen,
            'dokumen'       =>  $uploadPath,
            'kategori'      =>  $request->kategori,
            'tahun'         =>  $request->tahun
        ]);
        }else{
            $dokumen->update([
            'nama_dokumen'  =>  $request->nama_dokumen,
            'kategori'      =>  $request->kategori,
            'tahun'         =>  $request->tahun
        ]);
        }

        return redirect('/dokumen')->with('success','Berhasil mengedit dokumen publik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
