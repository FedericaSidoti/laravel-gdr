@extends('layouts.app');

@section('content')
    <div class="container">
        <h1> Crea il tuo personaggio</h1>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Personaggio</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Jack" value="{{old('name', $character->name)}}">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Livello</label>
                <input type="number" class="form-control" name="level" id="level" value="{{old('level', $character->level)}}">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" name="bio" id="bio" rows="4" placeholder="Descrizione del personaggio">{{old('bio', $character->bio)}}</textarea>
            </div>
            <div class="mb-3">
                <label for="defence" class="form-label">Difesa</label>
                <input type="number" class="form-control" name="defence" id="defence" value="{{old('defence', $character->defence)}}">
            </div>
            <div class="mb-3">
                <label for="speed" class="form-label">Velocità</label>
                <input type="number" class="form-control" name="speed" id="speed" value="{{old('speed', $character->speed)}}">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="number" class="form-control" name="hp" id="hp" value="{{old('hp', $character->hp)}}">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Modifica">
            </div>
        </form>
    </div>
@endsection