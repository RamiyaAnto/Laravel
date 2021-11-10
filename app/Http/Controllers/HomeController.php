<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function first(){
        return 'First Controller';
    }

    public function video(){
        return view('/video');
    }

    public function gallery(){
        return view('/gallery');
    }

    public function myinfo(){
        return view('/myinfo');
    }
}
