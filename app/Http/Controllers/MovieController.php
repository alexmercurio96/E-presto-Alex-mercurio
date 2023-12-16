<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MovieController;

class MovieController extends Controller
{
    public function create(){

        return view('movie.create');

    }
    public function store( Request $request){
      
        $title= $request->title;
        $author= $request->author;
        $body= $request->body;

        $article= new Movie();
    }
}
