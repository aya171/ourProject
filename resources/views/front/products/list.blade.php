@extends('front.layouts.master')
@section('content')

<ul>
    @foreach ($products as $product)
        <li>{{$product}}</li>
    @endforeach
</ul>
    
@endsection