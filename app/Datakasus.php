<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakasus extends Model
{
    protected $table='table_datakasus';
    protected $fillable=['nama','datakasus','kategori','kasus','poin','saksi'];
}
