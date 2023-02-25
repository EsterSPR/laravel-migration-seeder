<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="w-100 es_container p-5">

    <ul>

            @foreach($trains as $train)

            <li>$train</li>

            @endforeach

    </ul>

    </div>

</body>

</html>