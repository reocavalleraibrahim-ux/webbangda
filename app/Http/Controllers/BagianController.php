<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagian;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bagian = Bagian::All();
        $page = 'bagian';
        return view('dashboard.bagian.main',compact('page','bagian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'bagian';
        $act = 'create';
        return view('dashboard.bagian.form',compact('page','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nama_bagian'   =>  'required|string',
            'kode_bagian'   =>  'required|string',
            'nama_pengarah' =>  'required|string',
            'kode_warna'    =>  'required|string'
        ]);
        Bagian::create($data);

        return redirect('/bagian')->with('success','Berhasil Menambahkan Bagian');
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
        $page = 'bagian';
        $act = 'edit';
        $bagian = Bagian::where(['id' => $id])->first();

        return view('dashboard.bagian.form',compact('page','act','bagian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama_bagian'   =>  'required|string',
            'kode_bagian'   =>  'required|string',
            'nama_pengarah' =>  'required|string',
            'kode_warna'    =>  'required|string'
        ]);
        $update = Bagian::where(['id' => $id]);
        $update->update($data);

        return redirect('/bagian')->with('success','Berhasil Mengupdate Bagian');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bagian = Bagian::where(['id' => $id]);
        $bagian->delete($id);

        return redirect('/bagian')->with('success','Berhasil menghapus Bagian');
    }
}
