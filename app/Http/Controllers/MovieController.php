<?php

namespace App\Http\Controllers;



use App\Models\Tag;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MovieFormRequest;



class MovieController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }


    public function create(){

        $categories=Category::all();
        
        $tags=Tag::all();

        return view('movie.create',compact('categories','tags'));

    }
    public function store(MovieFormRequest $request){
      

        // dd($request->all());
        //    $request->validate([
        //     'title' => 'required',
        //     'author' => 'required', 
        //     'body' => 'required',
        //    ]);

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
        if($request->file('img')){
        $img = $request->file('img')->store('/public/image');
        }
        else{
            $img='public/image/default.jpg';
        }
       
        // MASS ASSIGNMENT e bisogna metterle tutte insieme perchè se viene aggiunta dopo non funziona
        // per poter dire al film che stiamo creando di mettersi in relazione ai tag e dobbiamo farlo instanziando ciè salvandolo in un oggetto
         $movie=Movie::create([
          'title'=>$request->title,
        //   'author'=>$request->author, modificato perchè abbiamo eliminato la colonna 
          'body'=>$request->body,
          'img'=>$img,
        //   'user_id'=>Auth::user()->id,
          'user_id'=>Auth::id(),
          'category_id'=>$request->category
        ]);
         
        $movie->tags()->attach($request->tags);
        
        //  sto chiedendo al mio metodo di relazione di effettuare l'operazione di scrittura che definisce nella tabella pivot questa o queste relazioni

        return redirect()->back()->with('message','articolo inserito');
    }

    public function index(){
        
        $movies= Movie::all();
        return view('movie.index',
        compact('movies')
        );

    }

    public function show(Movie $movie){ 
        
        // dd($movie);
        return view('movie.show',
        // ['movie'=> $movie]
        compact('movie')
    );
    }
    public function edit(Movie $movie)
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('movie.edit', compact('movie','categories','tags'));
    }
    public function update(Request $request, Movie $movie)
    {
        
    }
}
