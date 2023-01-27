<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){ 
        $categorias = [ 
            'CELULARES',
            'INFORMÁTICA',
            'MÓVEIS',
            'AUTOMOTIVA',
            'LIVROS',
            'BELEZA',
            'ESPORTE',
            'LUXO',
        ]; 

        return view('categorias.index', compact('categorias'));
    }
}
