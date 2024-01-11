<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> {{$title}} </h2>
    <p>from class {{ $class_num }} </p>

    <ul>
        @foreach ($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>
</body>
</html>