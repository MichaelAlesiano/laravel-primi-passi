<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima esercitazione Laravel</title>
</head>
<body>
    <h1>Ciao sono {{$nome}} {{$cognome}} </h1>
    <p>Questi sono i miei dischi preferiti :</p>

    <ul>
        @foreach($dischi as $disco)
        <li> {{$disco}} </li>
        @endforeach
    </ul>
    
</body>
</html>