<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Yiwu Nabawi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/bootstrap.js'])
    </head>
    <body class="font-sans antialiased">


        <div>

            <div>

                @include('layouts.nav')
            </div>

            <!-- Page Content -->
            <main class="col-span-10">
                {{ $slot }}
            </main>

            <div>
                @include('layouts.footer')
            </div>


        </div>


    </body>
</html>
