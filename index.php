<?php

include("filmes.php");
include("menu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90 Locadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div>
            <img src="img/logo.png" alt="90 Locadora">
            <h2>locadora</h2>
            <nav>
                <ul>
                    <?php for($i=0; $i < count($menu); $i++) { ?>
                        <li><a href="#"><?= $menu[$i] ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div id="banner">
            <h1>Celebrate Good Times</h1>
            <p>Alugue filmes como nos velhos tempos!</p>
            <button type=button>saiba mais</button>
        </div>

        <div id="categorias" a href="#">
            <?php for($i=0; $i < count($filmes); $i++) { ?>
                <div id="categoria">
                    <img src="<?= $filmes[$i][0]["imagem"] ?>" alt="<?= $filmes[$i][0]["genero"] ?>">
                    <h3><a href="#"><?= $filmes[$i][0]["genero"] ?></a></h3>
                </div>
            <?php } ?>
        </div>

        <div id="destaques">
            <h3>Destaques</h3>
            <?php for($i=0; $i < count($filmes); $i++) { ?>
                <div id="destaque">
                    <img src="<?= $filmes[$i][1]["img"] ?>" alt="<?= $filmes[$i][0]["nome"] ?>">
                    <h4><a href="#"><?= $filmes[$i][1]["nome"] ?></a></h3>
                    <p>Artista: <?= $filmes[$i][1]["artista"] ?></p>
                </div>
            <?php } ?>
        </div>

        <div id="recomendados">
            <h3>Recomendados</h3>
            <?php for($i=0; $i < count($filmes); $i++) { ?>
                <div id="recomendado">
                    <img src="<?= $filmes[$i][2]["img"] ?>" alt="<?= $filmes[$i][0]["nome"] ?>">
                    <h4><a href="#"><?= $filmes[$i][2]["nome"] ?></a></h3>
                    <p>Artista: <?= $filmes[$i][2]["artista"] ?></p>
                </div>
            <?php } ?>
        </div>
    </main>

    <footer>
        <nav>
            <ul>
                <?php for($i=0; $i < count($menu); $i++) { ?>
                <li><a href="#"><?= $menu[$i] ?></a></li>
                <?php } ?>
            </ul>
        </nav>
        <div>
            <p>Copyright © Renata Rocha</p>
        </div>
    </footer>

</body>
</html>