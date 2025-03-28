@extends('layouts.app')

@section('content')
    <form action='{{route("bookcategories.store")}}' method="POST">
        @csrf


        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>


       <input type="submit" value="Book Category Add" class="btn btn-primary">


    </form>

@endsection