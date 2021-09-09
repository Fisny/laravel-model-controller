<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach ($allMovies as $movie){

        <div class="block">
            <img src=" {{ movie->cover }} " alt="copertina del film {{movie->title}}">
            <h2>{{movie->title}}</h2>
            <p>{{movie-type}}</p>
            <p>{{movie-price}}</p>
        </div>
        
    }
        
    @endforeach

</body>
</html>