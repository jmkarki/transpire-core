<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            {{ $title or "" }}
        </title>

        @include('core::web.meta.meta')

        @if (env('environment') == 'local')
            <meta name="robots" content="noindex, nofollow" />
        @endif        

        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

        @section('font-awesome')
            <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        @show
        @section('google-fonts')
            <link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        @show
            <link rel="stylesheet" type="text/css" href="{{ asset(elixir('assets/css/app.css')) }}">
        @yield('head')

    </head>
    <body>
        @yield('content')

        @yield('modal')

        @yield('footer')
    </body>
</html>
