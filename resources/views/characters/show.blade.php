@extends('layouts.app')

@section('content')

<section>
    <div class="container p-4">
        <div class="card border-primary mb-3 w-50 mx-auto">
            <div class="card-header">{{ $character->name }}</div>
            <div class="card-body text-primary">
                <p class="card-text">Livello: {{ $character->level }}</p>
                <p class="card-text">Bio: {{ $character->bio }}</p>
                <p class="card-text">Difesa: {{ $character->defence }}</p>
                <p class="card-text">Velocità: {{ $character->speed }}</p>
                <p class="card-text">HP: {{ $character->hp }}</p>
                @if ($character->type)
                    <p class="card-text">Classe: {{ $character->type->name }}</p>
                    <p class="card-text">Descrizione Classe: {{ $character->type->description }}</p>                    
                @endif

            </div>
        </div>              
    </div>
</section>
    
@endsection