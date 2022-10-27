<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home() {
        return view('site.home');
    }
}
