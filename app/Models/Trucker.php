<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;
    // protected $table="Trucker";
    // protected $guarded=[];
    
    public function package(){
        return $this->hasMany('App\Models\Package');

    }

     //Relacion Muchos a Muchos
     public function truck(){
        return $this->belongsToMany('App\Models\Truck');
    }
}
