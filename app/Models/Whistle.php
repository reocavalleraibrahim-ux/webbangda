<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whistle extends Model
{
    protected $table = 'whistle_blower';
    protected $fillable = ['nama_pelapor','no_identitas','alamat','pekerjaan','nomor_kontak','uraian_aduan','bukti_dukung','verifikasi'];
}
