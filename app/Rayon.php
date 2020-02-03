<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table='table_rayons';
    protected $fillable=['nama_rayon','pembimbing','ruangan'];
}
