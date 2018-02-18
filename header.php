<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if (wp_title('', false)) {
            echo ' :';
        } ?>
        <?php bloginfo('name'); ?>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/_assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/_assets/swiper/css/swiper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/_assets/swiper/css/swiper.min.css">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    
</head>

<body>
    <nav >
        <div class="header-title">
            <div class="header-width">
                <div class="header-logo" style="background-image:url(<?php echo get_template_directory_uri() ?>/_assets/img/logo-header.jpg)">

                </div>
                <h4><?php bloginfo('name') ?></h4>
                <p><?php bloginfo('description'); ?></p>
            </div>
            
        </div>
        <div class="header-nav">
            <div class="header-width">
            <nav>
            <?php ts_nav(); ?>
            </nav>
               
            </div>
        </div>
    </nav>
    