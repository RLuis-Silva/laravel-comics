{{-- SEZIONE SITO: COMIC DETTAGLIO --}}

@extends('layouts/main')
@section('content')
    {{-- qui scrivo il contenuto del main della pagina home! --}}
    <main class="wrap-home">
        <!-- sezione hero -->
        <section class="general-hero">
            <div class="container">
                <img src="{{asset('img/cover-home.jpg')}}" alt="comics cover">
            </div>
        </section>

        <!-- sezione lista comics -->
        <section class="lista-comics">
            <div class="comics">
                PRODOTTO COMIC IN DETTAGLIO
                <button>LOAD MORE</button>
            </div>
        </section>
        


    </main>
@endsection