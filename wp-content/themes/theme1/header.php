<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); wp_title();?></title>
    <!--    <link rel="stylesheet" type="text/css" href="style.css">-->
    <!--    <script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>-->
    <!--    <script src="js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>-->

    <?php wp_head();?>
</head>
<body>
<div class="head-wrapper">
    <div class="head">
        <div class="head-logo">
            <a href="/"><img src="<?php bloginfo('template_url')?>/images/logo.jpg" alt=""/></a>
        </div>
        <div class="head-banner"><img src="<?php bloginfo('template_url')?>/images/728x90.jpg" alt="banner"/></div>
    </div>
</div>

<div class="menu-wrapper">
    <div class="menu-main">
        <?php if (!dynamic_sidebar('menu_header')):?>
            <span>This is menu place, adiing from widgets</span>
        <?php endif;?>
<!--        <ul class="menu">-->
<!--            <li><a href="#">Home</a> </li>-->
<!--            <li><a href="#">About Me</a> </li>-->
<!--            <li><a href="#">Design Services</a> </li>-->
<!--            <li><a href="#">Request Quote</a> </li>-->
<!--            <li><a href="#">Advertise</a> </li>-->
<!--            <li><a href="#">Contact Me</a> </li>-->
<!--        </ul>-->
        <ul class="ico-social">
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/icon-vk.png" alt="vk.com"/></a> </li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/icon-youtube.png" alt="youtube"/></a> </li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/icon-facebook.png" alt="facebooke"/></a> </li>
            <li><a href="#"><img src="<?php bloginfo('template_url')?>/images/icon-twitter.png" alt="twitter"/></a> </li>
        </ul>
    </div>
</div>