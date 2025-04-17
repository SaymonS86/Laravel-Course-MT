@extends('layouts.main')

@section('title', 'Quiki-tests')
    
@section('content')

@if ($id !== null)
    <p>Seu produto é {{$id}}</p>
@endif
    
@endsection