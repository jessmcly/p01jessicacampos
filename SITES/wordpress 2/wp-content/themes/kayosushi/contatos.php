<!DOCTYPE HTML>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-3.1.1.min.js"></script>
    <script src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> </head>

<body>
    <div class="col">
        <header>
            <a href="index.html">
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
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.157589534501!2d-8.67213102044748!3d41.15291251856287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd246f82dd2904b5%3A0x57610d17dc31eb2b!2sKayo!5e0!3m2!1spt-PT!2spt!4v1497722146010"></iframe>
        <form class="contato">
            <div class="box1">
                <h1>Contacte-nos</h1>
                <h2>Rua Diogo Botelho Nº1882<br>
                Telefone: 223 220 221 ou Telemóvel: 911 114 681<br>
                Email: RestauranteKayo@gmail.com<br>
                <br><br>
                <h1>Ou envie-nos uma mensagem:</h1></h2>
                <input class="box" type="text" id="input-name" placeholder="Name">
                <input class="box" type="email" id="input-email" placeholder="Email">
                <input class="box" type="text" id="input-subject" placeholder="Subject"> </div>
            <div class="box2">
                <textarea class="box box3" name="message" type="text" id="input-message" placeholder="Message"></textarea>
            </div>
            <input type="submit" value="Send" id="input-submit"> </form>
        <footer> &copy;Restaurante Kayo Sushi 2017 </footer>
    </div>
</body>

</html>