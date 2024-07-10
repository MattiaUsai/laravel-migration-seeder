@dd($trains)
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
    <h1>home app</h1>

    
    <hr>
    @include ('shared.footer')



</body>

</html>