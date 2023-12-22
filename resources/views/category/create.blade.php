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
        <h1 class="text-body-emphasis display-2">CREA LA TUA CATEGORIA</h1>
        <h3 class="col-lg-6 mx-auto my-5">
          qui potrai inserire le categorie dei film 
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
    <div class="alert alert-danger ">
      <p>completa il form <button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
        aria-label="Close"></button></p>
        
        
      </div>
      @endif
      
      {{-- FORM --}}
      
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-5">
            
            
            <form enctype="multipart/form-data" method="POST" action="{{route('category.store')}}"
            class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom">
            @csrf
            <div class="mb-4">
              <label for="name" class="form-label">Nome categoria</label>
              <input type="text" name="name"
              class="form-control
              @error('name') is-invalid @enderror"
              value="{{ old('name') }}" id="name">
              @error('name')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
           
            <div class="mb-4">
              <label for="img" class="form-label">Immagine</label>
              <input type="file" name="img" class="form-control  @error('img') is-invalid @enderror" id="img">
              @error('img')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <label for="description" class="form-label">Descrizione</label>
              <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" cols="30"
              rows="10">{{ old('description') }}</textarea>
              @error('description')
              <p class="text-small text-danger">{{ $message }}</p>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary flex-column">inserisci la categoria</button>
          </form>
          
        </div>
      </div>
    </div>
    
    
  </x-layout>