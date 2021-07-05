<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function main() {
        return view('welcome');
    }

    function home() {
        return view('home');
    }

    function about() {
        return view('about');
    }

}
