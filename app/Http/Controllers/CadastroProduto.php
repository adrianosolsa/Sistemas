<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroProduto extends Controller
{
    public function index() {
        return view('site.produtos.index');
    }
}
