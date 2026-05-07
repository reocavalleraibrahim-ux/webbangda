<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'agenda';
        $agenda = Agenda::join('bagian','agenda.id_bagian','=','bagian.id')->get();
        return view('dashboard.agenda.main',compact('page','agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'agenda';
        $act = 'create';
        $bagian = Bagian::all();
        return view('dashboard.agenda.form',compact('page','act','bagian'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_agenda'   =>  'required|string',
            'waktu'         =>  'required|string',
            'tanggal'       =>  'required|date',
            'tempat'        =>  'required|string',
            'id_bagian'     =>  'required|numeric',
        ]);

        $data = [
            'nama_agenda'   =>  $request->nama_agenda,
            'waktu'         =>  $request->waktu,
            'tanggal'       =>  $request->tanggal,
            'tempat'        =>  $request->tempat,
            'id_bagian'     =>  $request->id_bagian,
            'user_create'   =>  session()->get('name')
        ];
        Agenda::create($data);

        return redirect('/agenda')->with('success','Berhasil menambahkan agenda');

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
        $page = 'agenda';
        $act = 'edit';
        $bagian = Bagian::all();
        $agenda = Agenda::where(['id' => $id])->first();
        return view('dashboard.agenda.form',compact('page','act','bagian','agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_agenda'   =>  'required|string',
            'waktu'         =>  'required|string',
            'tanggal'       =>  'required|date',
            'tempat'        =>  'required|string',
            'id_bagian'     =>  'required|numeric',
        ]);

        $data = [
            'nama_agenda'   =>  $request->nama_agenda,
            'waktu'         =>  $request->waktu,
            'tanggal'       =>  $request->tanggal,
            'tempat'        =>  $request->tempat,
            'id_bagian'     =>  $request->id_bagian,
            'user_edit'   =>  session()->get('name')
        ];
        $agenda = Agenda::where(['id' => $id]);
        $agenda->update($data);

        return redirect('/agenda')->with('success','Berhasil mengupdate agenda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
