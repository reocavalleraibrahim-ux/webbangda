<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Apbd;
Use App\Models\Master;

class SignageController extends Controller
{
    public function index()
    {
        $agenda = Agenda::where(['agenda.tanggal' => date('Y-m-d')])->join('bagian','agenda.id_bagian','=','bagian.id')->orderBy('waktu','asc')->get();
        $jmlagenda = Agenda::where(['agenda.tanggal' => date('Y-m-d')])->count('id');
        $apbd = Apbd::all();
        $tanggal_apbd = Master::where(['header' => 'tanggal_apbd'])->first();
        $total_pendapatan = Apbd::sum('anggaran_pendapatan');
        $real_pendapatan = Apbd::sum('realisasi_pendapatan');
        $total_belanja = Apbd::sum('anggaran_belanja');
        $real_belanja = Apbd::sum('realisasi_belanja');
        return view('signage',compact('agenda','apbd','total_pendapatan','real_pendapatan','total_belanja','real_belanja','tanggal_apbd','jmlagenda'));
    }
}
