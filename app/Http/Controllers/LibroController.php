<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function create()
    {
        return view('trabajo.create');
    }

    public function store(Request $request)
    {
        $trabajo = new Libro();
        $trabajo->titulo = $request->input('titulo');
        $trabajo->paginas = $request->input('paginas');
        $trabajo->editorial = $request->input('editorial');
        $trabajo->isbn = $request->input('isbn');
       
        $trabajo->save();
        
        return $trabajo;
    }

    public function index()
    {
        $trabajos = Libro::orderBy('id', 'desc')->get();
        return view('trabajo.listar', compact('trabajos'));
    }

    public function show(Libro $trabajo) {
        return view('trabajo.show', compact('trabajo'));
    }

    public function destroy(Libro $trabajo) {
        $trabajo->delete();
        return redirect()->route('trabajo.index');
    }

    public function edit (Libro $trabajo){
    
        return view ('trabajo.edit',compact('trabajo'));

    }

    public function update(Request $request,Libro $trabajo ){

       
        $trabajo->titulo = $request->input('titulo');
        $trabajo->paginas = $request->input('paginas');
        $trabajo->editorial = $request->input('editorial');
        $trabajo->isbn = $request->input('isbn');
        $trabajo->save();
        return redirect()->route('trabajo.index');

    }
    
}

