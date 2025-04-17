@extends('layouts.main')

@section('title', 'Quiki-tests')

@section('content')



    <div id="event-create-conatiner" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Enevnto a criar">

            </div>
            <div class="form-group">
                <label for="title">Imagem:</label>
                <input type="file" id="image" name="image" class="form-control-file">

            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city"
                    placeholder="Nome do Enevnto a criar">

            </div>
            <div class="form-group">
                <label for="title">O event e privado ?:</label>
                <select name="private" id="private" class="from-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>

            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
    <div>
        @if (session('msg'))
            <p>{{ session('msg') }}</p>
        @endif
    </div>
@endsection
