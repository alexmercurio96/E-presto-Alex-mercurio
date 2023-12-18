<div class=" p-2 card-custom card" data-bs-theme="dark" style="width: 18rem;">
  <img src="https://picsum.photos/150" class="card-img-top" alt="imgrandom">
  <div class="card-body ">
    <h5 class="card-title">{{$movie->title}}</h5>
    <p class="card-text">L'autore del film :  {{$movie->author}}</p>
    <p class="card-text">La trama del film :  {{$movie->body}}</p>
    <a href="{{route('movie.show',compact('movie'))}}" class="btn btn-primary">Dettaglio</a>
  </div>
</div>