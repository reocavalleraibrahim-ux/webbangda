<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'kategori';
        $kategori = Kategori::all();

        return view('dashboard.kategori.main',compact('page','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Kategori';
        $act = 'create';

        return view('dashboard.kategori.form',compact('page','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' =>  'required|string',
            'kode_kategori' =>  'required|string'
        ]);

        Kategori::create($data);

        return redirect('/kategori')->with('success','Berhasil menambahkan kategori');
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
        $page = 'Kategori';
        $act = 'edit';
        $kategori = Kategori::where(['id' => $id])->first();

        return view('dashboard.kategori.form',compact('page','act','kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_kategori' =>  'required|string',
            'kode_kategori' =>  'required|string'
        ]);

        Kategori::where(['id' => $id])->update($data);

        return redirect('/kategori')->with('success','Berhasil update kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::where(['id' => $id]);
        $kategori->delete($id);

        return redirect('/kategori')->with('success','Berhasil menghapus Kategori');
    }
}
