@extends('layouts.app2')

@section('content')
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
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

  </div>

  @endforeach



</div>
<div class="d-flex justify-contents-center border border-primary me-auto">
{{ $books->links() }}
</div>

@endsection