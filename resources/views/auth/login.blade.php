<x-layout>
    
  {{-- HEADER --}}

  <div class="container my-5" data-bs-theme="dark">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5 header-custom">
      <button type="button"
      class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill"
      aria-label="Close"></button>
      <svg class="bi mt-5 mb-3" width="48" height="48">
        <use xlink:href="#check2-circle"></use>
      </svg>
      <h1 class="text-body-emphasis display-2">Accedi</h1>
      <h3 class="col-lg-6 mx-auto my-5">
        inserisci i tuoi dati
      </h3>
      
    </div>
  </div>

   {{-- FINE HEADER --}}
    
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
                    
                    
                    <form  method="POST" action="{{route('login')}}"
                    class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom">
                    
                    @csrf
                    <div class="mb-4">

                        <label for="email" class="form-label">Email Utente</label>
                         <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                         value="{{ old('email') }}" id="email">@error('email')
                         <p class="text-small text-danger">*</p>
                         @enderror
                    </div>

                    <div class="mb-4">

                        <label for="password" class="form-label">password Utente</label>
                         <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                         id="password">@error('password')
                         <p class="text-small text-danger">*</p>
                         @enderror
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary flex-column">accedi</button>
                </form>
                
            </div>
        </div>
        
    </x-layout>