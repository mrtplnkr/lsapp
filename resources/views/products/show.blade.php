@extends('layouts.app')

@section('content')
    <a href="/products" class="btn btn-default">Go Back</a>
    <h1>{{$product->title}}</h1>
    <img style="width:100%" src="/storage/images/{{$product->image}}">
    <br><br>
    <div>
        {!!$product->body!!}
    </div>
    <hr>
    <small>Product added on {{$product->created_at}} by {{$product->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $product->user_id)
            <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'PRODUCT', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection