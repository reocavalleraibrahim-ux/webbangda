<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $table = 'bagian';
    protected $fillable = ['nama_bagian','kode_bagian','nama_pengarah','kode_warna'];
}
