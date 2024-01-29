<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movie = Movie::all();
        $data = [
            'movie' => $movie,
        ];
        return view('welcome',  $data);
    }
}
