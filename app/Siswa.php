<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='table_siswa';
    protected $fillable=['nis','nama','alamat','agama','jurusan','rombel','nohp','pembimbing','rayon'];
}
