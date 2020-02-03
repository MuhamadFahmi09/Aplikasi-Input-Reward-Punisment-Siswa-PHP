<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputpoin extends Model
{
    protected $table='table_inputpoins';
    protected $fillable=['kode_kejadian','nama','poin','kategori','kasus','saksi'];
}
