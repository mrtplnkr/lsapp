@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'PRODUCT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $product->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'description')}}
            {{Form::textarea('description', $product->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection