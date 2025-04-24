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
                        <img src="img/Events-default.jpg" alt="Events-default-image" class="default-IMG">
                        <div class="card-body">
                            <p class="card-date">10/12/25</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-partcipants"> X participantess </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
