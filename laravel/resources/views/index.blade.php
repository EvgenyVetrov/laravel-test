<!DOCTYPE HTML>
<html lang="ru-RU">
    <head>
        <meta charset="utf-8">
        <title>{{ $title  }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">

            <h1 class="text-center">{{ isset($pagetitle) ? $pagetitle : "гостевая" }}</h1></hr>
            @for($i=0; $i<5; $i++)
                <p># {{ $i }}</p>
            @endfor

            @foreach($users as $user)

                <p>{{ $user['name'] }}</p>
            @endforeach
            @yield('content')


        </div>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>