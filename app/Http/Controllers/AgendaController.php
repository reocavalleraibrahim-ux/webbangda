<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bagian;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = 'agenda';
        return view('dashboard.agenda.main',compact('page'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
