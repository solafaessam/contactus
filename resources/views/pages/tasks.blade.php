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
    @foreach($tasks as  $task)
    <li><a href="tasks/show/{{$task->id}}">{{$task->title}}</a> </li>
    @endforeach
</ul>
</body>
</html>
