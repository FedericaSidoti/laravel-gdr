@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Modifica il tuo personaggio</h1>
        <form action="{{ route('characters.update', $character->id) }}" method="POST">

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
                <label for="attack" class="form-label">Attacco</label>
                <input type="number" class="form-control" name="attack" id="attack" value="{{old('attack', $character->attack)}}">
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

            <p>Seleziona uno o più oggetti</p>
            <div class="d-flex flex-wrap mb-3">
            @foreach ($items as $item)
                <div class="form-check me-3">
                    <label class="form-check-label" for="tech-{{$item->id}}">
                        {{$item->name}}
                    </label>
                    <input name="items[]" class="form-check-input" type="checkbox" value="{{$item->id}}" id="item-{{$item->id}}" @checked( in_array($item->id, old('items', $character->items->pluck('id')->all() ) ) )>
                </div>    
            @endforeach
            </div>

            <select class="form-select mb-3" aria-label="Default select example" name="type_id" id="type_id">
                <option value="">Scegli la classe</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected(old('type_id', optional($character->type)->id) == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>

            <div>
                <input type="submit" class="btn btn-primary" value="Modifica">
            </div>
        </form>
    </div>
@endsection