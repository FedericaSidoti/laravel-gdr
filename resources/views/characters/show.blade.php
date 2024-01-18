@extends('layouts.app')

@section('content')

<section>
    <div class="container p-4">
        <div class="card border-primary mb-3 w-50 mx-auto">
            <div class="card-header">{{ $character->name }}</div>
            <div class="card-body text-primary">
                <p class="card-text">Livello: {{ $character->level }}</p>
                <p class="card-text">Bio: {{ $character->bio }}</p>
                <p class="mb-0">Equipaggiamento:</p>
                <ul class="d-flex flex-wrap gap-2 ps-0">
                    @foreach ($character->items as $item)
                    <li>{{ $item->name }}</li>
                    @endforeach
                </ul>
                <p class="card-text">Attacco: {{ $character->attack }}</p>
                <p class="card-text">Difesa: {{ $character->defence }}</p>
                <p class="card-text">Velocità: {{ $character->speed }}</p>
                <p class="card-text">HP: {{ $character->hp }}</p>
                @if ($character->type)
                    <p class="card-text">Classe: {{ $character->type->name }}</p>
                    <p class="card-text">Descrizione Classe: {{ $character->type->description }}</p>                    
                @endif
                <button class="btn btn-sm btn-warning">
                    <a class="text-decoration-none text-white" href="{{ route('characters.edit', $character->id) }}">Modifica</a>
                </button>
                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$character->id}}">
                    Elimina
                </button>
            </div>
        </div> 

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
    </div>
</section>
    
@endsection