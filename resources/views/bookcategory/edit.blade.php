@extends('layouts.app')

@section('content')
    <form action='{{route("bookcategories.update",$bookCategory->id)}}' method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$bookCategory->name}}">
        </div>


       <input type="submit" value="Book Category Add" class="btn btn-primary">


    </form>

@endsection