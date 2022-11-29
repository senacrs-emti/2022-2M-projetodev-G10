<?php
include_once '../home/dados.php';

$id = $_GET['id'];

$livro = $livros[$id];



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
            echo 'Escrito por '.$livro['autor'];
        ?>
        <br>    
        <?php    
        echo 'Publicado pela '.$livro['editora'];
        ?>    
        <br>
        <?php
        echo 'Lançado em '.$livro['ano'];
        ?>
</div>
        <div class="enredo">
        <?php
        echo $livro['titulo'];
        ?>
        <br>
        
        <?php
        echo $livro['enredo']
        ?>
    
        </div>

        <div class="capa">
            <?php
       echo '<img src="../home/imagens/'.$livro['imagem'].'" height=400px">';
        ?>
        </div>
        <div class="musica">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3qgbAgXOPYJ3Bj9bwctGCS?utm_source=generator" width="60%" height="250" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
        </div>

</body>
</html>