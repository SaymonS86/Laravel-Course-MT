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

                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                                <td>0</td>
                                <td>
                                    <a class="btn btn-info edit-btn" href="{{ route('event.edit', ['id' => $event->id]) }}"><ion-icon name="create-outline"></ion-icon> Editar</a>
                                    <form action="{{ route('event.destruct', ['id' => $event->id]) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>você ainda não tem eventos, <a href="/events">Criar Evento</a></p>
            @endif
        </div>
    </div>

@endsection
