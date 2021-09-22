<?php
/* Template Name: intro */
?>


<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="2; URL=<?php echo esc_url(home_url('/home')); ?>" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.13.0/css/all.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="<?php bloginfo('template_url'); ?>/js/zooming.min.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

    <script defer src="<?php bloginfo('template_url'); ?>/js/script.js" type="module"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/colcade.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


    <?php wp_head(); ?>
</head>
<body>



<div class="vid">


    <video autoplay muted playsinline id="video">
        <source src="<?php echo get_template_directory_uri(); ?>/images/kao_2d.mp4" type="video/mp4">
    </video>

</div>

<?php wp_footer(); ?>



</body>





