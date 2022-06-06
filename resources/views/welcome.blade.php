<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcom</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .center {
            margin: auto;
            width: 60%;
            border: 3px solid #73AD21;
            padding: 10px;
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>

</head>

<body>

    <h1>Soft It Care Software Development Task</h1>
    <div class="center">
    <h2> <a href="{{route('task.one')}}">Task One</a></h2>
    <h2> <a href="{{route('task.two')}}">Task Two</a></h2>
    <h2> <a href="{{route('task.three')}}">Task Three</a></h2>
    <h2> <a href="{{route('task.four')}}">Task Four</a></h2>
    </div>
   
</body>

</html>