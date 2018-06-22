@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'PRODUCT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'price')}}
            {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection