<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroObra extends Controller
{
    public function index() {
        return view('site.obras.index');
    }
}
