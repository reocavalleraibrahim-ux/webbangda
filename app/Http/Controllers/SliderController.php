<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Slider';
        $slider = Slider::all();
        return view('dashboard.slider.main',compact('title','slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Slider';
        $act = 'create';
        return view('dashboard.slider.form',compact('title','act'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar'          =>  'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('gambar')->store('slider','public');
            Slider::create([
                'name'          =>  $imagePath
            ]);

        return redirect('/slider')->with('success','Berhasil menambahkan Gambar Slider');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $title = 'Slider';
        $act = 'edit';
        $slider = Slider::where(['id' => $id])->first();
        return view('dashboard.slider.form',compact('title','act','slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $request->validate([
            'gambar'          =>  'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('gambar')->store('slider','public');
        $slider = Slider::where(['id' => $id]);
        $slider->update([
            'name'          =>  $imagePath
        ]);

        return redirect('/slider')->with('success','Berhasil Update Gambar Slider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $slider = Slider::where(['id' => $id]);
        $slider->delete($id);

        return redirect('/slider')->with('success','Berhasil Hapus Gambar Slider');
    }
}
