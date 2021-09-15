<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset = "UTF-8">
  <title>Paginacion</title>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo):  ?>
                    <li> <?php echo $articulo['id']. '.-'. $articulo['nombre'] ?></li>
                <?php  endforeach;   ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
           <!---- Boton primero   --->
            <?php if($pagina == 1) : ?>
                <li class="disabled">&laquo;</li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
            <?php endif; ?>
           <!----numeracion para mostrar paginas--->
            <?php
             for ($i=1; $i <= $numPaginas ; $i++) { 
                if($pagina == $i){
                    echo"<li class='active'><a href='$i'>$i</a></li>";
                }else{
                    echo "<li><a href='?pagina=$i'>$i</a></li>";
                }
             }
            ?>
            <!--- ultimo boton  --->
            <?php if($pagina == $numPaginas) : ?>
                <li class="disabled">&raquo;</li>
            <?php else: ?>
                <li><a href="?pagina= <?php echo $pagina + 1 ?>">&raquo;</a></li>
            <?php endif; ?>

            </ul>
        </section>
    </div>
</body>
</html>