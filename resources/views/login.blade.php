<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" id="email" placeholder="email">  <br>
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Se connecter">

    </form>
    
</body>
</html>