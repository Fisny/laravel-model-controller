<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Movie;


class HomeController extends Controller
{
    public function index() {
        $allMovies = Movie::all();
        return view('film', compact('allMovies'));
    }
}
