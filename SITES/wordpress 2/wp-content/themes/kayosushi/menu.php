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
        <script src="<?=$urlBase?>/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> </head>

    <body>
        <div class="col">
            <header>
                <a href="<?=$urlBase?>/index.php">
                    <div class="logo"></div>
                </a>
                <a href="<?=$urlBase?>/index.php">
                    <div class="menu home">Home</div>
                </a>
                <a href="menu.php">
                    <div class="menu carta">Menu</div>
                </a>
                <a href="<?=$urlBase?>/fotos.php">
                    <div class="menu fotos">Fotos</div>
                </a>
                <a href="<?=$urlBase?>/contatos.php">
                    <div class="menu contatos">Contatos</div>
                </a>
            </header>
            <div class="menuimag">
                <div class="texto menuespeciais">Menus Especiais
                    <div class="pop">
                        <div class="fundopop">
                            <br>
                            <p>Menus Especiais</p>
                            <h2>Segunda-Feira, Jantar</h2>
                            <h3>Menu Degustação 17,50<br> 1 Temaki ou
                        <br> 4 peças de hot
                        <br> 18 peças de Sushi e Sashimi
                        <br> (O Temaki pode ser substituído por mais
                        <br> 4 peças de hot)
                        <br> <br></h3>
                            <h2>Quarta-feira, Jantar</h2>
                            <h3>Menu Gin 20,00<br>
1 Gin da Noite<br>
Entrada:<br>
Crepes ou gyosa<br>
Prato principal:<br>
18 peças de Sushi e Sashimi<br>
                        Menu Gin 25,00
                        <h3>1 Gin da Noite<br>
Entrada:<br>
Gyosa ou Ebi tempura<br>
Prato principal:<br>
18 peças de Sushi e Sashimi<br>
    Sobremesa do Dia</h3>
                            <button class="fecharpop">X</button>
                        </div>
                    </div>
                </div>
                <div class="texto menuespeciais">Menu Almoço </div>
                <div class="texto menuespeciais">Carta</div>
            </div>
            <footer> &copy;Restaurante Kayo Sushi 2017 </footer>
        </div>
    </body>

    </html>