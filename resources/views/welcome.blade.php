@extends('layouts.main')

@section('title', 'Quiki-tests')

@section('content')

    <div class="conteudo">
        <input type="text" id="search" name="search" class="form-control" placeholder="pesquisa">
        <img src="img/image.png" alt="" id="image-quiki">
        <form action="/" method="GET">
        </form>
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
                                @if (count($event->users) == 1)
                                <p class="card-partcipants"> {{ count($event->users) }} participante </p>    
                                @else
                                <p class="card-partcipants"> {{ count($event->users) }} participantes </p>
                                @endif
                                
                                <a href="/events/{{ $event->id }}" class="btn-show-more">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @if (count($events) == 0 && $search)
                    <p>não foi possivel encontrar nada com o nome {{$search}}! <a href="/">Veja tudo</a></p>
                    @elseif(count($events) == 0)
                    <p>Não Existem eventos no momento</p>   
                    @endif
            </div>
        </div>
    </div>

@endsection
