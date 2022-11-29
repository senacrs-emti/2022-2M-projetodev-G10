<?php
include_once '../home/dados.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecomendLivros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="paginalivro">
    <div class="dados">
        <?php
        foreach ($livros as $key => $livro) {
            echo '<Escrito por'.$livro['autor']>'';
            
        }
?>
</div>
        <div class="enredo">
        <h1>Jogos Vorazes</h1>
            <h4>Em uma nação onde anualmente 24 adolescentes lutam por ordem do governo em busca de ser o último em pé, a protagonista Katniss Everdeen entra no jogo mortal para salvar a sua irmã e cria uma chama de esperança para uma revolução.</h4>
        </div>

        <div class="capa">
            <img src="../home//imagens/jogosvorazes.jpg" alt="capa do livro Jogos Vorazes" height="400px">
        </div>
        <div class="musica">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3qgbAgXOPYJ3Bj9bwctGCS?utm_source=generator" width="60%" height="250" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
        </div>

</body>
</html>