<x-layout>
  
  
  
  
  <div class="container my-5" data-bs-theme="dark">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
      <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button>
      <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg>
      <h1 class="text-body-emphasis">FILM</h1>
      <p class="col-lg-6 mx-auto mb-4">
        Ecco i film che sono stati creati 
      </p>
      <button class="btn btn-primary px-5 mb-5" type="button">
        <a class="nav-link align-items-center" href="{{route('welcome')}}">homepage</a>
      </button>
    </div>
  </div>
  
  {{-- @dd($movies) --}}
  
  <div class="container">
    <div class="row ">
      @foreach ($movies as $movie)
      
      <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
        <x-card
        {{-- title="{{$movie->title}}"
        author="{{$movie->author}}"
        body="{{$movie->body}}" --}}
        
        :movie="$movie"
        
        {{-- :movie funzione come quella di sopra :) --}}
        
        />
        
      </div>
      @endforeach
      
    </div>
  </div>
  
  
  
  
  
</x-layout>
