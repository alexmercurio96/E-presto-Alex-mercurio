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
          <h1 class="text-body-emphasis display-2">Registrati</h1>
          <h3 class="col-lg-6 mx-auto my-5">
            inserisci i tuoi dati
          </h3>
        </div>
      </div>
          
    
       {{-- FINE HEADER --}}

       {{-- MESSAGGIO SUCCESSO --}}

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}<button type="button" class="btn-close mx-2" data-bs-dismiss="alert"
        aria-label="Close"></button>
    </div>
    @endif
    
    {{-- campi obbligatori --}}
    
       @if ($errors->any())
        <div class="alert alert-danger ">
         <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
         </ul>
        </div>
       @endif
        
        
        {{-- FORM --}}
        
        
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-5">
                    
               <form  method="POST" action="{{route('register')}}"
                    class="p-4  my-5 rounded-4 text-center bg-dark text-white form-custom">
                    @csrf
                    <div class="mb-4">

                        <label for="name" class="form-label">Nome Utente</label>
                        
                         <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                         value="{{ old('title') }}" id="title">
                    </div>
                    <div class="mb-4">

                        <label for="email" class="form-label">Email Utente</label>
                         <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                         value="{{ old('email') }}" id="email">@error('email')
                         <p class="text-small text-danger">e-mail errata</p>
                         @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                         <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                         @error('password')
                        <p class="text-small text-danger">password errata</p>
                        @enderror
                          
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Conferma Password
                        </label>
                         <input type="password" name="password_confirmation" class="form-control @error('email') is-invalid @enderror"
                          id="password_confirmation">
                          @error('password_confirmation')
                        <p class="text-small text-danger">le due password non combaciano</p>
                        @enderror

                    </div>
                     <button type="submit" class="btn btn-primary flex-column">Registrati</button>
               </form>
                </div>
            </div>
        </div>             
                         
    </x-layout>
                    
                    
        
                
                    
                    
                  