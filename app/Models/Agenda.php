<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $fillable = ['nama_agenda','waktu','tanggal','tempat','id_bagian','user_create','user_edit'];
}
