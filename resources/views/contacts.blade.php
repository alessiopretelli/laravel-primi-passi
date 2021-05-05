<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                text-align: center;
            }

            ul li {
                list-style: none;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>{{ $messaggio }}</h1>
            <ul>
                @foreach ($contatti as $contatto)
                <li>{{ $contatto }}
                    @if (!$loop->last)
                    ,
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
        <a href="/">Torna alla home</a>
    </body>
</html>
