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
                    <p>{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h1>{{ $event->title }}</h1>
                    <p class="event-city">
                    <h2>Cidade de: {{ $event->city }}</h2>
                    </p>
                    <p class="event-participation">
                    <h2>{{ count($event->users) }} participantes</h2>
                    </p>
                    <p class="event-city">
                    <h2>Dono do Evento: {{ $eventOwner['name'] }} </h2>
                    </p>
                    <p>
                        Descrição: {{ $event->description }}
                    </p>
                    <h3>Evento conta com:</h3>
                    <ul id="items-list">
                        @foreach ($event->items as $item)
                            <li><span>{{ $item }}</span></li>
                        @endforeach
                    </ul>
                  @if (!$hasUserJoined)
                  <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="" 
                    class="btn-primary" 
                    id="event-submit" 
                    onclick="event.preventDefault();
                    this.closest('form').submit()">Confirmar
                        Presença
                    </a>
                </form>
                  @else
                      <p class="already-joined"><a href="{{route('user.dashboard')}}"> Você já está neste evento</a></p>
                  @endif
                </div>
            </div>
        </div>
    </head>

@endsection
