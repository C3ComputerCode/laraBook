@extends('layouts.app')

@section('content')
<div class="container">
<div class="">
            <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <!-- <th>BookID</th> -->
                <th>Name</th>
                <th>Author</th>                
                <!-- <th>Total_Copy</th> -->
                <!-- <th>Avriable </th> -->
                <th>Category</th>
                <!-- <th>Publication Date</th> -->
                <!-- <th>Photo</th>   -->
                <th>Control</th>       
            </tr>

            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <!-- <td>{{$book->book_id}}</td> -->
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <!-- <td>{{$book->total_copies}}</td> -->
                <!-- <td>{{$book->available_copies}}</td> -->
                <td>{{$book->book_category_id}}</td>
                <!-- <td>{{$book->publication_date}}</td> -->
                <!-- <td></td> -->
                <td></td>

            </tr>
            @endforeach

            </table>
        {{ $books->links() }}

        </div>
</div>
@endsection
