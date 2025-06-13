@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="flex flex-col items-center justify-center h-screen gap-y-32">
        <div class="title text-center">
            <h1 class="text-8xl font-bold py-10">Dashboard</h1>
        </div>

        <div class="content py-10">
            @if (count($events) > 0)
                <div class="overflow-x-auto">
                    <table class="mx-auto border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th scope="col" class="p-4 border border-gray-300">#</th>
                                <th scope="col" class="p-4 border border-gray-300">Nome</th>
                                <th scope="col" class="p-4 border border-gray-300">Participantes</th>
                                <th scope="col" class="p-4 border border-gray-300">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr class="text-center">
                                    <th scope="row" class="p-4 border border-gray-300">{{ $loop->index + 1 }}</th>
                                    <td class="p-4 border border-gray-300">
                                        <a href="/events/{{ $event->id }}" class="text-blue-500 underline">{{ $event->title }}</a>
                                    </td>
                                    <td class="p-4 border border-gray-300">{{ count($event->users) }}</td>
                                    <td class="p-4 border border-gray-300">
                                        <a class="btn btn-info edit-btn bg-blue-500 text-white px-4 py-2 rounded" 
                                           href="{{ route('event.edit', ['id' => $event->id]) }}">
                                            <ion-icon name="create-outline"></ion-icon> Editar
                                        </a>
                                        <form action="{{ route('event.destruct', ['id' => $event->id]) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger delete-btn bg-red-500 text-white px-4 py-2 rounded">
                                                <ion-icon name="trash-outline"></ion-icon> Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center text-lg py-6">Você ainda não tem eventos, <a href="/events" class="text-blue-500 underline">Criar Evento</a></p>
            @endif
            <div class="title">
                <h1>
                    Eventos que estou participando
                </h1>
            </div>
            <div class="content">
            @if ( count($eventsAsParticipants) > 0)
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
                    @foreach ($eventsAsParticipants as $event)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>{{ count($event->users) }}</td>
                            <td>
                                <a href="#">Sair do evento</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p class="text-center text-lg py-10">Você ainda não está em nenhum evento, <a href="{{ route('home') }}" class="text-blue-500 underline">Veja todos os eventos</a></p>
            @endif    
        </div>
    </div>

@endsection

