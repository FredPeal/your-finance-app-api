<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Hola {{$user->firts_name.' '.$user->last_name}}<br>
        Activa el usuario accediendto al siguiente  <a href="{{$link}}">link</a>
    </div>
</body>
</html>