<x-layout>
  
  
  
  
  
    {{-- HEADER --}}
    
    <div class="container my-5" data-bs-theme="dark">
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
        <button type="button"
        class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill"
        aria-label="Close"></button>
        <svg class="bi mt-5 mb-3" width="48" height="48">
          <use xlink:href="#check2-circle"></use>
        </svg>
        <h1 class="text-body-emphasis display-2"> MODIFICA IL TUO FILM</h1>
        <h3 class="col-lg-6 mx-auto my-5">
          qui potrai modificare i tuoi film
        </h3>
        
      </div>
    </div>
    
    {{-- articolo creato con successo --}}
  
    @if (session('message'))
    <div class="alert alert-success">
      {{ session('message') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
      aria-label="Close"></button>
    </div>
    @endif
    
    {{-- campi obbligatori --}}
  
    @if ($errors->any())
    <div>
      <p class="alert alert-custom bg-danger">COMPILA IL FORM <button type="button" class="btn-close  " data-bs-dismiss="alert"
        aria-label="Close"></button></p>
        
        
      </div>
      @endif
      
      {{-- FORM --}}
      
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-5">
            
            
            <form enctype="multipart/form-data" method="POST" action="{{ route('movie.update',compact('movie')) }}"
            class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom">
            @csrf
            @method('PUT')
            {{-- @method('PUT') --}}
            <div class="mb-4">
              <label for="title" class="form-label">Titolo del film</label>
              <input type="text" name="title"
              class="form-control
              @error('title') is-invalid @enderror"
              value="{{$movie->title}}" id="title">
              @error('title')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
            {{-- <div class="mb-4">
              <label for="author" class="form-label">Autore del film</label>
              <input type="text" name="author" class="form-control @error('title') is-invalid @enderror"
              value="{{ old('author') }}" id="author">
              
              @error('author')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div> --}}
            {{-- @dd($tags) --}}
            <div class="mb-4">
            <select  class="form-select" name="category" aria-label="Default select example">
              <option>Seleziona categoria</option>
              @foreach($categories as $category)
              <option 

              @if ($category==$movie->category) selected @endif
                  
              value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            </div>
            <div class="mb-4">
                <div><img src="{{Storage::url($movie->img)}}" height="200" alt=""></div>
              <label for="img" class="form-label">Immagine</label>
              <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" id="img">
              @error('img')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
           
            <div class="mb-3" >
              @foreach($tags as $tag)
            <div class="form-check">
              <input class="form-check-input" 

              @if($movie->tags->contains($tag))checked @endif 
               {{-- qui sopra fa un controllo se il film contiene dei tag e quindi li va a ckeckare --}}
              name="tags[]" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                {{$tag->name}}
              </label>
           
            </div>
            @endforeach
          </div>
            <div class="mb-4">
              <label for="body" class="form-label">Trama</label>
              <textarea name="body" class="form-control @error('title') is-invalid @enderror" id="body" cols="30"
              rows="10">{{$movie->body}}</textarea>
              @error('body')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary flex-column">modifica film</button>
          </form>
          
        </div>
      </div>
    </div>
    
    
  </x-layout>
  