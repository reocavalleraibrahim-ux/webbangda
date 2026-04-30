<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'Berita';
        $berita = Berita::all();
        return view('dashboard.berita.main',compact('page','berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Berita';
        $act = 'create';
        return view('dashboard.berita.form',compact('page','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail'     =>  'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul'         =>  'required|string',
            'isi'           =>  'required|string'
        ]);

        $imagePath = $request->file('thumbnail')->store('berita','public');
        Berita::create([
            'judul'     =>  $request->judul,
            'isi'       =>  $request->isi,
            'thumbnail' =>  $imagePath
        ]);

        return redirect('/berita')->with('success','berhasil menambahkan berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $berita = Berita::where(['id' => $id])->first();
        $page = 'Berita';
        $act = 'edit';
        return view('dashboard.berita.form',compact('page','act','berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'thumbnail'     =>  'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'judul'         =>  'required|string',
            'isi'           =>  'required|string'
        ]);

        if($request->hasFile('thumbnail')){
            $imagePath = $request->file('thumbnail')->store('berita','public');
            $berita = Berita::where(['id' => $id]);
            $berita->update([
                'judul'     =>  $request->judul,
                'isi'       =>  $request->isi,
                'thumbnail' =>  $imagePath
            ]);
        }else{
            $berita = Berita::where(['id' => $id]);
            $berita->update([
                'judul'     =>  $request->judul,
                'isi'       =>  $request->isi
            ]);
        }

        return redirect('/berita')->with('success','berhasil update berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $berita = Berita::where(['id' => $id]);
        $berita->delete($id);

        return redirect('/berita')->with('success','Berhasil menghapus Berita');
    }
}
