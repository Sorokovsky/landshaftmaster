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
    <header class="header">
        <div class="container header__container">
            <?php echo get_custom_logo(); ?>
            <?php echo get_header_menu(); ?>
            <div class="burger">
                <span></span>
            </div>
        </div>
    </header>
<main class="main">