<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TRYVE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/assets/js/app02.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

    @yield('assets')
</head>
<body>
@include('layouts._header')

<div class="p-5 fs-10 mt-5 text-center" style="background: #fbc700;">
    
    @yield('title')

    <div style="font-size: 1rem">
    @yield('tag')
    </div>
</div>

<main class="container">
{{-- 検索ボックス --}}
@yield('search')
@yield('content')
    {{-- 依頼作成 --}}
    @yield('create')
</main>
</body>
</html>
