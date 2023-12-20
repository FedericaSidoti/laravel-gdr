@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    {{-- <h1>Homepage</h1> --}}
    <h1 class="text-center p-5">Scegli il tuo personaggio!</h1>

       <section>
        <div class="container">
            <table class="table table-primary w-50 mx-auto">
                <thead>
                    <tr>
                        <th scope="col">Livello</th>
                        <th scope="col">Nome</th>
                        <th scope="col"></th>
                        {{-- <th scope="col">Descrizione</th>
                        <th scope="col">Difesa</th>
                        <th scope="col">Velocità</th>
                        <th scope="col">Salute</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                    <tr>
                        <td>{{$character->level}}</td>
                         <td>{{$character->name}}</td>
                         <td>
                            <button class="btn btn-primary"><a class="text-decoration-none text-white" href="{{ route('characters.show', $character->id) }}">Dettagli</a></button>
                            <button class="btn btn-warning"><a class="text-decoration-none text-white" href="{{ route('characters.edit', $character->id) }}">Modifica</a></button>
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
