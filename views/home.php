<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Coucou</h1>
    <div>
        <p><?= $pokeAleat->getName() ?> Apparait</p>
        <form action="/capture" method="post">
            <button type="submit" name='id' value=<?= $pokeAleat->getId() ?>> Capturer </button>
        </form>
    </div>
    <div>
        <?php if (!empty($pokeCaptured)) : ?>
            <?php foreach ($pokeCaptured as $poke) : ?>
                <p><?= $poke->getName() ?></p>
                <form action="/release" method="post">
                    <button type="submit" name='id' value=<?= $poke->getId() ?>> Liberer </button>
                </form>

            <?php endforeach ?>

        <?php endif ?>
    </div>
</body>

</html>