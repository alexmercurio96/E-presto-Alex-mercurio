<?php

namespace App\Http\Controllers;



use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\MovieController;

class MovieController extends Controller
{
    public function create(){

        return view('movie.create');

    }
    public function store( Request $request){
      
        // $title= $request->title;
        // $author= $request->author;
        // $body= $request->body;
  

        // METODO SENZA MASS ASSIGNMENT
        // $movie = new Movie();

        //  $movie->title = $title;
        //  $movie->author = $author;
        //  $movie->body = $body;
              
        //  $movie->save();

        //  dd('ho salvato il mio articolo del db');


        // QUESTO è IL METODO PIù CORRETTO IN QUANTO NON Cè BISOGNO DI SALVARE E SFRUTTA A PIENO LA FILLABLE

        // MASS ASSIGNMENT e bisogna metterle tutte insieme perchè se viene aggiunta dopo non funziona
        Movie::create([
          'title'=>$request->title,
          'author'=>$request->author,
          'body'=>$request->body,
          
        ]);


        return redirect()->back()->with('message','articolo inserito');
    }

    public function index(){
        
        $movies= Movie::all();
        return view('movie.index',
        compact('movies')
        );

    }
}
