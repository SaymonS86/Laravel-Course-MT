@extends('layouts.main')

@section('title', 'Quiki-tests')

@section('content')

<head>
    <div class="conteudo">
        <div class="show-ctn">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="">
            </div>
            <div id="info-container" class="col-md-6">
                <p>{{ date('d/m/Y',  strtotime($event->date))}}</p>
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                <h2>Cidade de: {{ $event->city }}</h2>
                </p>
                <p class="event-participation">
                    <h2>X participantes</h2>
                </p>
                <p class="event-city">
                    <h2>Dono do Evento: X</h2>
                </p>
                <h3>Evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
               <a href="#" class="btn-primary" id="event-submit">Confirmar Presença</a>
            </div>
        </div>
    </div>
</head>

@endsection
