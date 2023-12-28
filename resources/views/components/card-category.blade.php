<div class=" p-2 card-custom card" data-bs-theme="dark" style="width: 18rem;">
  <img src="{{Storage::url($category->img)}}" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title">{{$category->name}}</h5>
    <p class="card-text">Descrizione della categoria :  {{$category->description}}</p>
    @if (Route::currentRouteName()=='category.index')
    <a href="{{route('category.show',compact('category'))}}" class="btn btn-primary">Dettaglio</a>
    
     @else
      
     <a href="{{route('category.index',compact('category'))}}" class="btn btn-primary">vai alle categorie</a>
    
     @endif
     <a href="{{route('category.edit',compact('category'))}}" class="btn btn-success">Modifica</a>

     <form action="{{route('category.destroy',compact('category'))}}" method="POST">

      @method('DELETE')
      @csrf
      
      <button type="submit" class="btn btn-danger my-1">Elimina</button>
      </form>
  </div>
</div>