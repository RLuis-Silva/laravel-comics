<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
        <title>Laravel</title>
    </head>
    <body>
       
       
        {{-- includo la sezione header --}}
        @include('partials/header')

        
        {{-- QUI MAIN CONTENUTO --}}
        @yield('content')
        
        
         {{-- includo la sezione footer --}}
        @include('partials/footer')
        
        
    </body>
</html>











