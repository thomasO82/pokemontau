<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <H1>Pokemon !</H1>
    </header>
    <main>
        <section>
            <p>
                <?= $pokeRandom['name'] . " Apparait"; ?>

            </p>
            <form action="/capture" method="post">
                <button name="id_poke" value='<?= $pokeRandom['id'] ?>'>Capturer</button>
            </form>
        </section>
      <section>
            <h2>Pokemon Attrapés</h2>
            <div>
                <?php
                foreach ($pokes as $poke) {
                ?>
                    <div>
                        <p><?= $poke['name'] ?></p>
                        <form action="/release" method="post">
                            <button name="id_poke" value='<?= $poke['id'] ?>'>Relacher</button>
                        </form>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>