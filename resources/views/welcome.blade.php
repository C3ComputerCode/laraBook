@extends('layouts.app2')

@section('content')
<div class="search"></div>
<div class="cart-box ">
<a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Carts
</a>
</div>

<div class="container d-flex flex-wrap">

  @foreach ($books as $book )
  <div class="col-sm-12 col-md-4 col-lg-3">
    <div class="card m-2">
      @foreach ($book->photos as $photo)

      <img src="{{asset('/storage/uploads/'.$photo->photo)}}" alt="" height="100" class="card-img-top">

      @endforeach

      <div class="card-body">
        <h5 class="card-title">{{$book->name}}</h5>
        <p class="card-text">{{$book->author}}</p>
        
        <a href='{{route("cart.add",$book->id)}}' class="btn btn-primary"> To Borrow </a>
      </div>
    </div>

  </div>

  @endforeach



</div>
<div class="d-flex justify-content-center ">
{{ $books->links() }}
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart Header</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  @if(session('cart'))
    
  <!-- foreach(session('cart') as $sess){

    }  --> 
    

     
   <p>alfal</p>
        
    
  @endif
  </div>
  
</div>

@endsection