<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'Master';
        $data = Master::All();
        return view('dashboard.master.main',compact('page','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'Master';
        $act = 'create';
        return view('dashboard.master.form',compact('page','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'header'    =>  'required|string',
            'isi'       =>  'required|string'
        ]);

        Master::create($data);

        return redirect('/master')->with('success','Berhasil Menambahkan Master Data');
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
        $page = 'Master';
        $master = Master::where(['id' => $id])->first();
        $act = 'edit';

        return view('dashboard.master.form',compact('page','master','act'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'header'    =>  'required|string',
            'isi'       =>  'required|string'
        ]);

        $master = Master::where(['id' => $id])->update($data);

        return redirect('/master')->with('success','Berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $master = Master::where(['id' => $id]);
        $master->delete($id);

        return redirect('/master')->with('success','Berhasil menghapus Data');
    }
}
