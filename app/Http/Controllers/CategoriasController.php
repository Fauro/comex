<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){ 
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create(){ 
        return view('categorias.create');
    }

    public function store(Request $request){ 
        $categoria = new Categoria();
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('/categorias');
    }
}
