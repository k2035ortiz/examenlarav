<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
     //Relacion muchos a muchos
     public function trucker(){
        return $this->belongsToMany('App\Models\Trucker');
    }
}
