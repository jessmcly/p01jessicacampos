<?php
$urlBase = esc_url( get_template_directory_uri() );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta charset="UTF-8">
    <title>Kayo</title>
    <link rel="stylesheet" type="text/css" href="<?=$urlBase?>/style.css">
    <script src="<?=$urlBase?>/jquery-3.1.1.min.js"></script>
    <script src="<?=$urlBase?>/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
