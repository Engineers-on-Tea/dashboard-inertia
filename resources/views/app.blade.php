<!DOCTYPE html>
@php
    $dir = '';
    if (request()->is('admin/*') || request()->is('admin')) {
        $dir = \App\Bll\Lang::getAdminLangDir();
    } else {
        $dir = \App\Bll\Lang::getLangDir();
    }
    if ($dir == 'rtl') {
        $dir = '-rtl';
    } else {
        $dir = '';
    }
@endphp

<html lang="{{ \App\Bll\Lang::getAdminLangCode() }}" data-textdirection="{{ $dir }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @include('global.styles', ['dir' => $dir])

    @if (request()->is('admin/*') || request()->is('admin'))
        @include('admin.styles', ['dir' => $dir])
        {{-- @include('admin.meta') --}}
    @else
        @include('home.styles', ['dir' => $dir])
    @endif

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    @include('global.scripts', ['dir' => $dir])

    @if (request()->is('admin/*') || request()->is('admin'))
        @include('admin.scripts', ['dir' => $dir])
    @else
        @include('home.scripts', ['dir' => $dir])
    @endif

</body>

</html>
