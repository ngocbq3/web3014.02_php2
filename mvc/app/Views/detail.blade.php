@extends('client.layout')

@yield("title", $title)

@section('content')

<h3>{{ $product->name }}</h3>
<div>Giá: {{ $product->price }}</div>
<div>
    {{ $product->detail }}
</div>
@endsection