<?php

    $livros = array("Rainha Vermelha", "Percy Jackson", "Jogos Vorazes", "Principe Cruel", "Conectadas", "Os Sete Maridos de Evelyn Hugo", "O Conto da Aia", "Amor e Gelato");

shuffle($livros);
foreach ($livros as $livro) {
    echo "<img src='imagesDirectory/$livro.jpg'> <br>";
}


?>