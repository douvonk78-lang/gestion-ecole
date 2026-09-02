<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titre', 'Gestion École')</title>

        <!-- Police -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Tailwind CSS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 antialiased">

        {{-- Navigation --}}
        @include('partials.navigation')

        {{-- Contenu de la page --}}
        <main>
            @yield('contenu')
        </main>

        {{-- Footer --}}
        @include('partials.footer')

    </body>
</html>