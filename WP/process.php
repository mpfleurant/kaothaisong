<?php
/* Template Name: process */
?>

<?php get_header(); ?>

<body class="process">

<div class="process-page">
    <a href="homePage.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" class="logo-mobile"></a>

    <nav class="nav-princip">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" class="logo"></a>

        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li><a href="<?php echo esc_url(home_url('/home')); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('/shop')); ?>">SHOP</a></li>
                <li class="parent"><a onclick="navMobile2()" href="javascript:void(0);">ARCHIVE</a></li>

                <ul id="dropdown-mobile2" style="display:none;">
                    <li><a href="<?php echo esc_url(home_url('/2020-2')); ?>">2020</a></li>
                    <li><a href="<?php echo esc_url(home_url('/polaroid')); ?>">Polaroid</a></li>
                    <li><a href="<?php echo esc_url(home_url('/process')); ?>">Process</a></li>
                </ul>
                <li><a href="https://www.instagram.com/kaothaisongspecies">INSTAGRAM</a></li>
                <li><a href="https://soundcloud.com/kaothaisongspecies">SOUNDCLOUD</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT US</a></li>
                <li><a href="<?php echo esc_url(home_url('/business-card')); ?>">BUSINESS CARD</a></li>
            </ul>
        </div>


        <div class="menu-desktop">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/home')); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('/shop')); ?>">SHOP</a></li>



                <li class="parent"><a onclick="myFunction2()" href="javascript:void(0);">ARCHIVE</a></li>

                <ul id="dropdown2" style="display:none;">
                    <li><a href="<?php echo esc_url(home_url('/2020-2')); ?>">2020</a></li>
                    <li><a href="<?php echo esc_url(home_url('/polaroid')); ?>">Polaroid</a></li>
                    <li><a class="current" href="<?php echo esc_url(home_url('/process')); ?>">Process</a></li>
                </ul>
                <li><a href="https://www.instagram.com/kaothaisongspecies" target="_blank">INSTAGRAM</a></li>
                <li><a href="https://soundcloud.com/kaothaisongspecies" target="_blank">SOUNDCLOUD</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT US</a></li>
                <li><a href="<?php echo esc_url(home_url('/business-card')); ?>">BUSINESS CARD</a></li>
            </ul>
        </div>
    </nav>


    <div class="process-photos">

        <?php


        $images = get_field('gallery_process');

        if( $images ): ?>
        <?php foreach( $images as $image ): ?>

        <img src="<?php echo esc_url($image['sizes']['large']); ?>">

            <?php endforeach; ?>
        <?php endif; ?>

        <p class="credit">Graphic design by 010101.01.1</p>


    </div>

</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
