@extends('layouts.app')

@section('content')
    <form action='{{route("books.store")}}' method="POST">
        @csrf
        <div class="mb-3">
            <label for="bookid" class="form-label">Book ID</label>
            <input type="text" class="form-control" id="bookid" name="book_id">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="mb-3">
            <label for="total_copies" class="form-label">Total_copies</label>
            <input type="text" class="form-control" id="total_copies" name="total_copies">
        </div>

        <div class="mb-3">
            <label for="book_category_id" class="form-label">book_category_id</label>
            <input type="text" class="form-control" id="book_category_id" name="book_category_id">
        </div>

        <div class="mb-3">
            <label for="publication_date" class="form-label">publication_date</label>
            <input type="date" class="form-control" id="publication_date" name="publication_date">
        </div>

       <input type="submit" value="Book Add" class="btn btn-primary">

    </div>
    </form>

@endsection