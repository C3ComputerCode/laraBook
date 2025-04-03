@extends('layouts.app2')

@section('content')
<div class="container d-flex flex-wrap">

    @foreach ($books as $book )
    <div class="col-sm-12 col-md-4 col-lg-3">
        <div class="card m-2">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    @endforeach

</div>
@endsection
