<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book All</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">

        
    </div>
    
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
<div class="">
            <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>BookID</th>
                <th>Name</th>
                <th>Auther</th>                
                <th>Total_Copy</th>
                <th>Avriable </th>
                <th>Category</th>
                <th>Publication Date</th>
                <th>Photo</th>  
                <th>Control</th>       
            </tr>

            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->book_id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->auther}}</td>
                <td>{{$book->total_copies}}</td>
                <td>{{$book->available_copies}}</td>
                <td>{{$book->book_category_id}}</td>
                <td>{{$book->publication_date}}</td>
                <td></td>
                <td></td>

            </tr>
            @endforeach

            </table>
        {{ $books->links() }}

        </div>
</div>
@endsection
