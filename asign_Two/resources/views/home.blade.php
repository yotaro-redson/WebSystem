<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Page</h2>
    <span>
        @foreach ($record as $record)
        <div>
            <h3> Name : {{$record->name}} </h3>
            <p> Nickname : {{$record->nickname}} </p>
            <p> {{$record->blog}} </p>
            <hr>
        </div>

            
        @endforeach
    </span>
</body>
</html>