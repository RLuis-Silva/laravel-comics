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
                <div class="box-comic">
                    <h1>{{$comic['title']}}</h1>
                    <div class="prezzo">
                        U.S. Price: ${{$comic['price']}}
                    </div>
                    <div class="testo">
                        {!! $comic['body'] !!}
                    </div>
                </div>

                <aside class="adv">
                    {{-- <div class="adv-box"> --}}
                        <h4>ADVERTISEMENT</h4>
                        <img src="{{asset('img/adv.png')}}" alt="pubblicità">
                        {{-- <img src="{{asset('img/digital.png')}}" alt="tablet"> --}}
                    {{-- </div> --}}
                </aside>
            </div>
        </section>
        


    </main>
@endsection