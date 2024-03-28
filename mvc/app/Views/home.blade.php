@extends('client.layout')
@section('title', $title)

@section('content')
    @foreach($products as $product)
        <a href="{{ BASE_URL . 'product/detail/' . $product->id }}">
            <h3>{{ $product->name }}</h3>
        </a>
        <hr>
    @endforeach
@endsection