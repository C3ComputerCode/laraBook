@extends('layouts.app')

@section('content')
<div class="container">
<div class="">
            <table class="table table-striped table-hover">
            <tr>
                <th>#</th>                
                <th>Name</th>                                
                <th>Control</th>       
            </tr>

            @foreach($bookCategories as $bookCategory)
            <tr>
                <td>{{$bookCategory->id}}</td>
                <td>{{$bookCategory->name}}</td>
            </tr>            
            @endforeach

            </table>
        

        </div>
</div>
@endsection
