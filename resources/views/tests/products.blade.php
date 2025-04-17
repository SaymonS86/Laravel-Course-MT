@extends('layouts.main')

@section('title', 'Quiki-tests')
    
@section('content')

<h1>products</h1>

@if ($search !== '')
    <p>o usuario esta buscado {{$search}}</p>
@endif
    
@endsection