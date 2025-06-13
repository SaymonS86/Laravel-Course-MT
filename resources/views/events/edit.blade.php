@extends('layouts.main')

@section('title', 'Quiki-tests')

@section('content')



    <div id="event-create-conatiner" class="col-md-6 offset-md-3">
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Imagem:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="image-preview">
            </div>

            <div class="form-group">
                <h1 id="Create-event-title">Editando:{{ $event->title }}</h1>
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento a criar" value="{{ $event->title }}">

            </div>
            <div class="form-group">
                <label for="title">Data do evento:</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ $event->date }}">

            </div>
           
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome do Evento a criar" value="{{ $event->city }}">

            </div>
            <div class="form-group">
                <label for="title">O evento é privado?:</label>
                <select name="private" id="private" class="from-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private ? "selected='selected'" : "" }} >Sim</option>
                </select>

            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Items</label>
                Cadeiras<input type="checkbox" name="items[]" class="from-control" value="cadeiras">
                Mesas<input type="checkbox" name="items[]" class="from-control" value="mesas">
                Poltronas <input type="checkbox" name="items[]" class="from-control" value="poltronas">
                Cervejas-DE-GRATIS<input type="checkbox" name="items[]" class="from-control" value="cervejas">
            </div>


            <div id="submit-create-event">
                <input type="submit" class="btn-primary" value="Criar Evento">
            </div>
        </form>
    </div>

@endsection
