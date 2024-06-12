<?php

namespace App\Models;
use App\Models\Ejempler;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
    public function ejempler(){
        return $this->belongsToMany('App\Models\Ejempler');
    }
}
