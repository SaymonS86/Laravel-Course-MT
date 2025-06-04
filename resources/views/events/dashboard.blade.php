@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="title">
    <h1>
        Dshborad
    </h1>
    <div class="content">
      @if (count($events) > 0)
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <th scropt="row">{{ $loop->index + 1 }}</th>
                </tr>
            @endforeach
        </tbody>
      @else
        <p>você ainda não tem eventos, <a href="/events">Criar Evento</a></p>
      @endif
    </div>
</div>

@endsection