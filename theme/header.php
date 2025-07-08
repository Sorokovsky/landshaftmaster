<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo CFS()->get('keywords'); ?>">
    <meta name="description" content="<?php echo CFS()->get('desc'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/intro.jpg" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="section header">
        <div class="inner header_inner">
            <img src='<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>' alt="" class="header_icon">
            <nav class="header_menu">
            <?php
            $menu_items = CFS()->get('menu_items');
            foreach($menu_items as $menu_item){?>
                <a href="<?php echo $menu_item['href']; ?>" class="header_link"><?php echo $menu_item['text']; ?></a>
            <?php }?>
            </nav>
            <div class="burger">
                <div class="burger-body"></div>
            </div>
        </div>
        <nav class="mobile_menu">
        <?php
        $menu_items = CFS()->get('menu_items');
        foreach($menu_items as $menu_item){?>
            <a href="<?php echo $menu_item['href']; ?>" class="mobile_link"><?php echo $menu_item['text']; ?></a>
        <?php }?>
        </nav>
        <a href="tel:<?php echo str_replace(" ", "", CFS()->get('phones')[0]['phone']); ?>" class="contact">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="" class="contact_img">
        </a>
    </header>
<main class="main">