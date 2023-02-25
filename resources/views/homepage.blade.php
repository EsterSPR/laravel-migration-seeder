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

        <div class="row">
            <div class="col border g-0 p-1"> <h5>AZIENDA</h5> </div>
            <div class="col border g-0 p-1"> <h5>STAZIONE DI PARTENZA</h5> </div>
            <div class="col border g-0 p-1"> <h5>ORARIO DI PARTENZA</h5> </div>
            <div class="col border g-0 p-1"> <h5>STAZIONE DI ARRIVO</h5> </div>
            <div class="col border g-0 p-1"> <h5>ORARIO DI ARRIVO</h5> </div>
            <div class="col border g-0 p-1"> <h5>CODICE TRENO</h5> </div>
            <div class="col border g-0 p-1"> <h5>N. CARROZZE</h5> </div>
            <div class="col border g-0 p-1"> <h5>IN ORARIO</h5> </div>
            <div class="col border g-0 p-1"> <h5>CANCELLATO</h5> </div>
        </div>

        @foreach($trains as $train)

        <div class="row">
            <div class="col border g-0 p-1">{{ $train['azienda']}}</div>
            <div class="col border g-0 p-1">{{ $train['stazione_partenza']}}</div>
            <div class="col border g-0 p-1">{{ $train['partenza']}}</div>
            <div class="col border g-0 p-1">{{ $train['stazione_arrivo']}}</div>
            <div class="col border g-0 p-1">{{ $train['arrivo']}}</div>
            <div class="col border g-0 p-1">{{ $train['codice']}}</div>
            <div class="col border g-0 p-1">{{ $train['carrozze']}}</div>

            <div class="col border g-0 p-1
             @if ($train['in_orario'] == false)
                d-none
            @else
                
            @endif">No</div>
            <div class="col border g-0 p-1
             @if ($train['in_orario'] == true)
                d-none
            @else
                
            @endif">Sì</div>

            <div class="col border g-0 p-1
             @if ($train['cancellato'] == false)
                d-none
            @else
                
            @endif">No</div>
            <div class="col border g-0 p-1
             @if ($train['cancellato'] == true)
                d-none
            @else
                
            @endif">Sì</div>
        </div>

        @endforeach

    

    </div>

</body>

</html>