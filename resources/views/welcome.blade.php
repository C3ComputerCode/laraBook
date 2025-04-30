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

  <form action='{{route("order.store")}}' method="POST" enctype="multipart/form-data">
        @csrf  
        <div class="mb-3">
        <label for="bookid" class="form-label">Book Name</label>
        @foreach(session()->get('cart') as $item)
              
            <div class="d-flex">
              <input type="text" class="form-control" id="bookid" value="{{ $item['name']}}" disabled>
              <input type="hidden" class="form-control" id="bookid" name="book_ids[]" value="{{ $item['book_id']}}">
              <a href="" class="btn btn-danger">del</a>
            </div>
       
        @endforeach   
        </div>    
                        
        

    
    <input type="hidden" class="form-control" id="user_id" name="user_id">
    <input type="submit" value="Book Order" class="btn btn-primary">
</form>
    <!-- @foreach(session()->get('cart') as $item)
      <li>{{$item['name'] }} - {{ $item['book_id']}}</li>
    @endforeach -->
   
  
    

     
   
        
    
  @endif
  </div>
  
</div>

@endsection