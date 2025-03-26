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
                <td>
                   <div class="d-flex gap-2">
                   <div>
                        <form action="{{route('bookcategories.destroy',$bookCategory->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="del" class="btn btn-danger">
                        </form>
                    </div>
                    <a href="{{route('bookcategories.edit',$bookCategory->id)}}" class="btn btn-warning">edit</a>
                   </div>
                </td>
            </tr>            
            @endforeach

            </table>

            @session('info')
                <div class="alert alert-danger" role="alert">
                    {{ $value }}
                </div>                   
            @endsession
        

        </div>
</div>
@endsection
