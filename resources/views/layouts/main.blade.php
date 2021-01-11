<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body>
        <header class="main-header">
            QUI HEADER
        </header>

        <main>
            {{-- QUI MAIN CONTENUTO --}}
            @yield('content')
        </main>

        <footer class="main-footer">QUI FOOTER</footer>
    </body>
</html>
