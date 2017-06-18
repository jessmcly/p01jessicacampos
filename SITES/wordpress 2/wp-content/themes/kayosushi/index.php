<?php
//Variavel com caminho base até ao tema ex: 'localhost:8888/wordpress%202/wp-content/themes/kayosushi'
$urlBase = esc_url( get_template_directory_uri() );

?>
    <!DOCTYPE HTML>
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="<?=$urlBase?>/style.css">
        <script src="<?=$urlBase?>/jquery-3.1.1.min.js"></script>
        <script src="<?=$urlBase?>/script2.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>

    <body>
        <div class="col">
            <header>
                <a href="<?=$urlBase?>/">
                    <div class="logo"></div>
                </a>
                <a href="<?=$urlBase?>/index.html">
                    <div class="menu home">Home</div>
                </a>
                <a href="<?=$urlBase?>/menu.html">
                    <div class="menu carta">Menu</div>
                </a>
                <a href="<?=$urlBase?>/fotos.html">
                    <div class="menu fotos">Fotos</div>
                </a>
                <a href="<?=$urlBase?>/contatos.html">
                    <div class="menu contatos">Contatos</div>
                </a>
            </header>
            <div class="slide"> <img class="img" src="<?=$urlBase?>/imagens/colorimagesushi.png"> <img class="img" src="<?=$urlBase?>/imagens/food/26012016-DSC_2821.jpg"> <img class="img" src="<?=$urlBase?>/imagens/food/SAM_2783.JPG"> <img class="img" src="<?=$urlBase?>/imagens/food/SAM_2775.JPG"> </div>
            <footer> &copy;Restaurante Kayo Sushi 2017 </footer>
        </div>
    </body>

    </html>