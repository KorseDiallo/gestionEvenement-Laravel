<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <input type="submit" value="Se Deconnecter">
    </form>
   
    <h1>Client connecté</h1>
</body>
</html>