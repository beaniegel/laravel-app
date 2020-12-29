<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
            @auth
                <x-navigation/>
            @endauth
            @yield('content')
    </body>
</html>

