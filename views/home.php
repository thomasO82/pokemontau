<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Coucou</h1>
   <div>
    <p><?=$pokeRandom["name"]?>  Apparait</p>
    <form action="/capture" method="post">
        <button type="submit" name='id' value=<?=$pokeRandom["id"]?>> Capturer </button>
    </form>
   </div>
</body>

</html>