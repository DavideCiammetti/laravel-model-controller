<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel model controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">THE MOVIE DB</h1>
  <div class="d-flex flex-wrap justify-content-center gap-4 mt-5 mb-5"> 
        @foreach ($movie as $movies)
        <div class="box-shad-g card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><span class="font">Titolo: </span>{{$movies['title']}}</h5>
                <h6 class=" mb-2 "><span class="font">Titolo Originale: </span>{{$movies['original_title']}}</h6>
                <p class="card-text"><span class="font">Nazionalita': </span>{{$movies['nationality']}}</p>
                <p><span class="font">Data di Uscita: </span>{{$movies['date']}}</p>
                <p><span class="font">Voto: </span>{{$movies['vote']}}</p>
            </div>
        </div>
        @endforeach
  </div>
</body>
</html>
