<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apbd extends Model
{
    protected $table = 'apbd';
    protected $fillable = ['perangkat_daerah','anggaran_pendapatan','realisasi_pendapatan','anggaran_belanja','realisasi_belanja'];
}
