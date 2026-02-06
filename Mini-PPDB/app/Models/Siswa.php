<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'calon_siswa';
    protected $fillable = [
        'nama_lengkap',
        'asal_sekolah',
        'nilai_ujian',
        'status'
    ];
}
