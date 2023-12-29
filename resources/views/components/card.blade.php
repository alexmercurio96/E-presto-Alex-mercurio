<div class=" p-2 card-custom card" data-bs-theme="dark" style="width: 18rem;">
  <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title">{{$movie->title}}</h5>
    <p class="card-text">L'autore del film : @if($movie->user) {{$movie->user->name}} @else Utente non definito @endif</p>
    {{-- TRAVERSAL MODEL --}}
    {{-- in questo caso usiamo il metodo user senza tonde e ci prendiamo il nome dell'utente --}}
    <p class="card-text">La trama del film :  {{$movie->body}}</p>
    @if (Route::currentRouteName()=='movie.index')
    
    <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-primary">Dettaglio</a>
    
     @elseif (Route::currentRouteName()=='user.dashboard')
      
     <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-primary">Dettaglio</a>

     @else
     <a href="{{route('movie.index',compact('movie'))}}" class="btn btn-primary">vai ai film</a>
    
     @endif
  </div>
</div>