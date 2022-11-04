<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroFornecedor extends Controller
{
    public function index() {
        return view('site.fornecedor.index');
    }
}
