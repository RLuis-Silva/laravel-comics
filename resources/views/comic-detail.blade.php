{{-- SEZIONE SITO: COMIC DETTAGLIO --}}

@extends('layouts/main')
@section('content')
    {{-- qui scrivo il contenuto del main della pagina home! --}}
    <main class="wrap-home">
        <!-- sezione hero -->
        <section class="general-hero" style="background-image: url({{$comic['image-hero']}})">
            <div class="container">
                <img src="{{$comic['image-cover']}}" alt="comics cover">
            </div>
        </section>

         <!-- sezione comic in dettaglio -->
        <section class="comic-detail">
            <div class="container">
                <h1>{{$comic['title']}}</h1>
                <div class="prezzo">
                    {{$comic['price']}}
                </div>
                <div class="testo">
                    {!! $comic['body'] !!}
                </div>
            </div>
        </section>
        


    </main>
@endsection