<x-layout>
  
  
  
  
    <div class="container my-5" data-bs-theme="dark">
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button>
        <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg>
        <h1 class="text-body-emphasis">FILM</h1>
        <p class="col-lg-6 mx-auto mb-4">
          Ecco le categorie che sono state create
        </p>
        <button class="btn btn-primary px-5 mb-5" type="button">
          <a class="nav-link align-items-center" href="{{route('welcome')}}">homepage</a>
        </button>
      </div>
    </div>
    
    {{-- @dd($categories) --}}
    
    @if (count($categories))

    <div class="container">
      <div class="row ">
        @foreach ($categories as $category)
        
        <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
          <x-card-category
          {{-- title="{{$movie->title}}"
          author="{{$movie->author}}"
          body="{{$movie->body}}" --}}
          
          {{-- :category="$category" --}}
          
           :$category
          
          />
          
        </div>
        @endforeach
        
      </div>
    </div>
    
    @else

    <div class="container">
      <div class="row ">

        <h2>NON CI SONO CATEGORIE DISPONIBILI</h2>

      </div>
    </div>
    
    @endif
    
  </x-layout>
  