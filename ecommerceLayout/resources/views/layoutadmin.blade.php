<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Script --}}
    <script src="{{asset('js/floattingLabel.js')}}" defer></script>
    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/favicon/IconeLaranja.svg') }}" type="image/x-icon">
    {{-- Css --}}
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>@yield('title', '| Administração')</title>
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>