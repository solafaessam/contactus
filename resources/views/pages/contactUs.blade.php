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
  <h1>my name is {{$name}}</h1>

    <form action="{{route('send')}}" method="post">
      @csrf
       <input type="text" id="name" name="name">
       <input type="submit" value="send">
    </form>
    </body>
</html>
