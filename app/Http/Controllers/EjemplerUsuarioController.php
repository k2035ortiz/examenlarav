<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ejempler;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EjemplerUsuarioController extends Controller
{
    public function asociar(){

        $ejemplers = Ejempler::all();
        $usuarios = Usuario::all();
    
    
        return view ('ejempler_usuario.relacionar',compact('ejemplers','usuarios'));
    
        }
    
        public function store(Request $request){
    
            $ejemplers= Ejempler::find($request->ejempler_id);
    $ejemplers->usuario()->attach($request->usuario_id);
    
       return 'rol sociado ';
    
    
        }
    
}
