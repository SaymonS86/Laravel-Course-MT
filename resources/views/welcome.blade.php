@extends('layouts.main')

@section('title', 'Quiki-tests')

@section('content')

    <div class="conteudo">
        <img src="img/image.png" alt="" id="image-quiki">
        <input type="text" id="search" name="search" class="form-control">
        <div class="eventos-criados"></div>
        <div id="posts">

            <h2 id="title-posts"><strong>Acesse as postagens</strong></h2>
            <div id="container-card" class="row">
                @foreach ($events as $event)
                    <div class="base">
                        <div class="card-col-md3">
                            @if ($event->image !== NULL)
                            <img src="img/events/{{$event->image}}" alt="Events-default-image" class="default-IMG">
                            @else
                            <img src="img/Events-default.jpg" alt="Events-default-image" class="default-IMG">
                            @endif
                            
                            <div class="card-body">
                                <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-partcipants"> X participantess </p>
                                <a href="/events/{{ $event->id }}" class="btn-show-more">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @if (count($events) == 0)
                        <p>Não Existem eventos no momento</p>
                    @endif
            </div>
        </div>
    </div>

@endsection
