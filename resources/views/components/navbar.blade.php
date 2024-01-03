
{{-- NAVBAR --}}

<nav class="navbar navbar-expand-lg bg-dark navbar-dark nav-custom"  >
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">HOME</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('movie.create')}}">inserisci il tuo film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.create')}}">inserisci una nuova categoria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('movie.index')}}">tutti i film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">tutte le categorie</a>
          </li>
        
          @endauth
          @guest
          <li class="nav-item bg-gradient mx-2">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item bg-gradient">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
        @endguest
        
        @auth
        <li class="nav-item dropdown bg-gradient">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}} 
          </a>
          <ul class="dropdown-menu">
            <><a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard Utente</a>
              <form  method="POST" action="{{route('logout')}}">
                <li><hr class="dropdown-divider"></li>
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
           
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        @endauth
      </div>
    </div>
  </nav>