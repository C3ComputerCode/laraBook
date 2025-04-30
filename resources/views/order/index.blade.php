@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center ">
            <a href='{{route("books.create")}}' class="btn btn-primary">Book Create</a>
            <div class="col-6 mb-3 ms-auto">
                <form action='' method="GET">

                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="">
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>        
                    <th>Book ID</th>            
                    <th>Book Name</th>
                    <th>user name</th>
                    <th>Date and Time</th>                                                                                
                    <th>Control</th>
                    <th>Status</th>
                </tr>

                @foreach ($orders as $order)
                    <tr>                        
                        <td>{{ $order->id }}</td>
                        <td></td>
                        <td></td>
                        <!-- bookCategory['name'] -->
                        <td>{{$order->user_id}}</td>
                        <td>{{ $order->order_date }}</td>
                        <td></td>
                        <td>{{$order->status}}</td>                      

                    </tr>
                @endforeach

            </table>
            @if($orders->isEmpty())
            <p>No results found for "<span class="text-danger">{{ request('search') }}</span>". Try another keyword.</p>
            @endif
            {{ $orders->links() }}
            @session('info')
                <div class="alert alert-danger" role="alert">
                    {{ $value }}
                </div>
            @endsession

        </div>
    </div>
@endsection
