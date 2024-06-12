<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejempler extends Model
{
    use HasFactory;

    public function libro(){
        return $this->belongsTo(Libro::class);

    }

    //Relacion muchos a muchos
    public function usuario(){
        return $this->belongsToMany('App\Models\Usuario');
    }
}
