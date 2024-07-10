
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>

<body>
    <!-- TAG PER IMMAGINI -->
    <!-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> -->
    @include ('shared.header')
    <hr>
    <h1 class="text-center">Home</h1>
    <ul>
        @foreach ($trains as $train )
        <li>{{$train['agency']}}
            <ul>
                <li>Da {{$train['city_start']}} A {{$train['city_end']}}</li>
                <li> Partenza {{$train['time_start']}} </li>
                <li> Arrivo {{$train['time_end']}} </li>
            </ul>
        </li>
            
        @endforeach
    </ul>

    <hr>
    @include ('shared.footer')



</body>

</html>