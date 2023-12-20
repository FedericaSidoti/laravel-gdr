@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    {{-- <h1>Homepage</h1> --}}
    <h1 class="text-center p-5">Scegli il tuo personaggio!</h1>

       <section>
        <div class="container">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Livello</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Difesa</th>
                        <th scope="col">Velocità</th>
                        <th scope="col">Salute</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                    <tr>
                        <td>{{$character->level}}</td>
                         <td>{{$character->name}}</td>
                        <td>{{$character->bio}}</td>
                       <td>{{$character->defence}}</td>
                       <td>{{$character->speed}}</td>
                       <td>{{$character->hp}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       </section>
@endsection
