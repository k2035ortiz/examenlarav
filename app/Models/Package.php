<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    // protected $table="Package";
    // protected $guarded=[];
    
    public function trucker(){
        return $this->belongsTo('App\Models\Trucker');

    }
}
