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
  <div class="d-flex flex-wrap justify-content-center gap-3 mt-5"> 
        @foreach ($movie as $movies)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$movies['title']}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$movies['original_title']}}</h6>
                <p class="card-text">{{$movies['nationality']}}</p>
                <p>{{$movies['date']}}</p>
                <p>{{$movies['vote']}}</p>
            </div>
        </div>
        @endforeach
  </div>
</body>
</html>
