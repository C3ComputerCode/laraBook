@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center ">
            <a href='{{route("books.create")}}' class="btn btn-primary">Book Create</a>
            <div class="col-6 mb-3 ms-auto">
                <form action='' method="GET">

                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" name="search">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
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

                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <!-- <td>{{ $book->book_id }}</td> -->
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <!-- <td>{{ $book->total_copies }}</td> -->
                        <!-- <td>{{ $book->available_copies }}</td> -->
                        <td>{{ $book->book_category_id }}</td>
                        <!-- <td>{{ $book->publication_date }}</td> -->
                        <!-- <td></td> -->
                        <td>
                            <div class="d-flex gap-2">
                                <div>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="del" class="btn btn-danger">
                                    </form>
                                </div>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">edit</a>
                            </div>
                        </td>

                    </tr>
                @endforeach

            </table>
            {{ $books->links() }}
            @session('info')
                <div class="alert alert-danger" role="alert">
                    {{ $value }}
                </div>
            @endsession

        </div>
    </div>
@endsection
