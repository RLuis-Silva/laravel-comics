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
                <div class="container">
                    {{-- <ul> --}}
                        @foreach ($comics as $comic)
                            <div class="box-comic">
                                <ul>
                                    <li><a href=""><img src="{{$comic['image']}}" alt=""></a></li>
                                    <li><a href=""><h3>{{$comic['title']}}</h3></a></li>
                                </ul>
                            </div>
                        @endforeach
                    {{-- </ul> --}}
                </div>
                <button>LOAD MORE</button>
            </div>
        </section>
        


    </main>
@endsection