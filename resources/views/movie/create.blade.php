<x-layout>
  
  
  
  @if (session('message'))
  <div class="alert alert-success">
    {{ session('message') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  
  
  {{-- HEADER --}}
  
  <div class="container my-5" data-bs-theme="dark">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
      <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button>
      <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg>
      <h1 class="text-body-emphasis">FILM</h1>
      <p class="col-lg-6 mx-auto mb-4">
        qui potrai inserire i tuoi film
      </p>
      <button class="btn btn-primary px-5 mb-5" type="button">
        metti il tuo film
      </button>
    </div>
  </div>
  
  {{-- campi obbligatori --}}
  

  
  
  
  <div class="container"  >
    <div class="row justify-content-center " >
      <div class="col-12 col-md-5">
        
        {{-- FORM --}}
        
        <form enctype="multipart/form-data" method="POST" action="{{route('movie.store')}}" class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom" >
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">titolo del film</label>
            <input type="text" name="title" class="form-control
             @error('title') is-invalid @enderror"
             value="{{old('title')}}" id="title">
             @error('title')
           <p class="text-small text-danger">{{$message}}</p>
          @enderror
          </div>
          <div class="mb-3">
            <label for="author" class="form-label">autore del film</label>
            <input type="text" name="author" class="form-control @error('title') is-invalid @enderror" 
            value="{{old('author')}}"
            id="author">

            @error('author')
           <p class="text-small text-danger">{{$message}}</p>
          @enderror
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">immagine</label>
            <input type="file" name="img" class="form-control" id="img">
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">trama</label>
            <textarea name="body" class="form-control @error('title') is-invalid @enderror" id="body" cols="30" rows="10">{{old('body')}}</textarea>
            @error('body')
            <p class="text-small text-danger">{{$message}}</p>
           @enderror
          </div>
          
          
          <button type="submit" class="btn btn-primary flex-column">inserisci il film</button>
        </form>
        
      </div>
    </div>
  </div>
  
  
</x-layout>