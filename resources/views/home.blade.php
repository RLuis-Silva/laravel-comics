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
                                    <li><a href="{{route('comic-detail', $comic['id'])}}"><img src="{{$comic['image']}}" alt=""></a></li>
                                    <li><a href=""><h3>{{$comic['title']}}</h3></a></li>
                                </ul>
                            </div>
                        @endforeach
                    {{-- </ul> --}}
                </div>
                <button>LOAD MORE</button>
            </div>
        </section>

        <!-- sezione sotto-lista-->
        <section class="sotto-lista">
                <div class="container">
                    <div class="lista-blu">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{asset('img/digital.png')}}" alt="tablet">
                                    <h6>DIGITAL COMICS</h6>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('img/shop.png')}}" alt="shop">
                                    <h6>DC MERCHANDISE</h6>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('img/subscription.png')}}" alt="subscription">
                                    <h6>SUBSCRIPTION</h6>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('img/locator.png')}}" alt="locator">
                                    <h6>COMIC SHOP LOCATOR</h6>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{asset('img/locator.png')}}" alt="power visa">
                                    <h6>DC POWER VISA</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </section>
        


    </main>
@endsection