<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            {{ $title or "" }}
        </title>

        @include('core::meta.meta')

        @if (env('environment') == 'local')
            <meta name="robots" content="noindex, nofollow" />
        @endif

        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    </head>
    <body>
        @yield('content')
    </body>
</html>
