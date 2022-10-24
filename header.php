<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        wp_head();
    ?>
    <?php
        $title = get_the_title();
        if($title == ''){
            $title = 'Home';
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_theme_root_uri (); ?>/ErriAga/images/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri (); ?>/ErriAga/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><a href="/wordpress/"><img src="<?php echo get_theme_root_uri (); ?>/ErriAga/images/logo.png"></a></div>
            </header>
            <ul class="menu-desktop">
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/sobre">Sobre</a></li>
                <li><a href="/wordpress/contato">Contato</a></li>
            </ul>
            <div class="menu-mobile">
                <i class="fa-solid fa-align-right"></i>
                <ul>
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/sobre">Sobre</a></li>
                <li><a href="/wordpress/contato">Contato</a></li>
                </ul> 
            </div> <!-- menu mobile -->

