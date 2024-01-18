@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    {{-- <h1>Homepage</h1> --}}
    <h1 class="text-center p-5">Personaggi</h1>

        <section>
        <div class="container">
            <table class="table table-primary mx-auto">
                <thead>
                    <tr>
                        <th scope="col">Livello</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Classe</th>
                        <th scope="col" class="text-center">
                            <button class="btn btn-sm btn-primary"><a class="text-decoration-none text-white" href="{{ route('characters.create') }}">Nuovo Personaggio</a></button>
                        </th>
                        {{-- <th scope="col">Descrizione</th>
                        <th scope="col">Difesa</th>
                        <th scope="col">Velocità</th>
                        <th scope="col">Salute</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                    {{-- Modale --}}
                <div class="modal fade" id="modal-{{$character->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3>Vuoi davvero eliminare {{$character->name}}?</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{route('characters.destroy', $character->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fine modale --}}
                    <tr>
                        <td>{{$character->level}}</td>
                        <td>{{$character->name}}</td>
                        <td>{{ isset($character->type) ? $character->type->name : '-' }}</td>
                        <td>
                            <div class="d-flex gap-3 justify-content-center">
                                <button class="btn btn-sm btn-primary"><a class="text-decoration-none text-white" href="{{ route('characters.show', $character->id) }}">Dettagli</a></button>

                                <button class="btn btn-sm btn-warning"><a class="text-decoration-none text-white" href="{{ route('characters.edit', $character->id) }}">Modifica</a></button>

                                {{-- <form action="{{route('characters.destroy', $character->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    Pulsante elimina
                                    <input type="submit" value="Elimina" class="btn btn-danger">
                                {{-- </form> --}} 
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$character->id}}">
                                Elimina
                                </button>
                            </div>
                        </td>
                        {{-- <td>{{$character->bio}}</td>
                        <td>{{$character->defence}}</td>
                        <td>{{$character->speed}}</td>
                        <td>{{$character->hp}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       </section>
@endsection
