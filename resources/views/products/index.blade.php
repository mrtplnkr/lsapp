@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="/products/create" class="btn btn-primary">Create Product</a>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/images/{{$product->image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/products/{{$product->id}}">{{$product->title}}</a></h3>
                        <small>Written on {{$product->created_at}} by {{$product->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$products->links()}}
    @else
        <p>No products found</p>
    @endif
@endsection