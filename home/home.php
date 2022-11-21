<?php
include_once'header.php';
include_once 'dados.php'
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

    <div class= populares>
    <h3>Mais Populares</h3>

    
      <?php
        foreach ($livros as $livro) {
            print_r( '<img src="'.$livro['imagem'].'">');
        }

          ?>
        
    

  </div>
</div>
    </div>
  
    <div class= generos>
    <h3>Por Gêneros</h3>
    <img src="https://www.freeiconspng.com/thumbs/world-icon-png/world-icon-png-6.png" alt="icon mundo" width=70px height=70px>
    <img src="https://cdn-icons-png.flaticon.com/512/2/2267.png" alt="icon coração" width=70 height=70>
    <img src="https://icons.iconarchive.com/icons/iconsmind/outline/512/Map-2-icon.png" alt="icon mapa" width=70 height=70>
    <img src="https://iconarchive.com/download/i88221/icons8/ios7/Healthcare-Skull.ico" alt="icon caveira" width=70 height=70>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Icon-round-Question_mark.svg/1200px-Icon-round-Question_mark.svg.png" alt="icon interogação" width=70 height=70>

    </div>
</body>
</html>