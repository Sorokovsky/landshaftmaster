<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="квіти, рослини, landshaft, master, Хмельницький,догляд, пересадка, рослин, фахівця, кімнатні">
    <meta name="description" content="Наша компанія пропонує вам такі послуги:Ландшафтне проектування, створення газонів, декоративні водойми, системи поливу, альпінарії, квітники, рокарії, обслуговування">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="img/intro.jpg" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="section header">
        <div class="inner header_inner">
            <img src='<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>' alt="" class="header_icon">
            <nav class="header_menu">
                <a href="#" class="header_link">Головна</a>
                <a href="#work" class="header_link">Наші Послуги</a>
                <a href="#contacts" class="header_link">Наші контакти</a>
                <a href="#gallery" class="header_link">Галерея</a>
            </nav>
            <div class="burger">
                <div class="burger-body"></div>
            </div>
        </div>
        <nav class="mobile_menu">
            <a href="#" class="mobile_link">Головна</a>
            <a href="#work" class="mobile_link">Наші Послуги</a>
            <a href="#contacts" class="mobile_link">Наші контакти</a>
            <a href="#gallery" class="mobile_link">Галерея</a>
        </nav>
        <a href="tel:0982525857" class="contact">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="" class="contact_img">
        </a>
    </header>
<main class="main">