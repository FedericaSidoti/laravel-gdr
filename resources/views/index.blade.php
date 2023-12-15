@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    {{-- <h1>Homepage</h1> --}}
    <h1>Scegli il tuo personaggio</h1>
    @forelse ($characters as $character)
       <section>
        <div class="container">
            
        </div>
       </section>
    @empty
        
    @endforelse
@endsection
