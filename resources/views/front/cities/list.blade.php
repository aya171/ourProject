@extends('front.layouts.master')
@section('content')

<ul>
    @foreach ($cities as $city)
        <li> my country is {{$city->name}}</li>
    @endforeach
</ul>
    
@endsection