<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>
<body class="antialiased">
<h1>Contact Us</h1>
<br>

<ul>
    @foreach($tasks as $id => $task)

    <li><a href="{{'task/show/' . $id}}"> <h3>{{$task}}</h3></a></li>
    @endforeach
</ul>
</body>
</html>
