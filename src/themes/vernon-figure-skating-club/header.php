<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61d303198f.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background: linear-gradient(to bottom, rgba(222, 100, 97, 0), rgba(255, 255, 255, 1)),
                url('<?php bloginfo('template_url'); ?>/images/soft-tile-2.jpg') repeat; background-attachment: fixed; background-size: 250px;">

    <?php get_template_part('partials/header/hero-nav-overlay'); ?>
