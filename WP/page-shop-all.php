<?php
/* Template Name: shop */
?>

<?php get_header(); ?>


<body class="shop-page">

<div class="shop-all">
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
                    <li><a href="<?php echo esc_url(home_url('/process')); ?>">Process</a></li>
                </ul>
                <li><a href="https://www.instagram.com/kaothaisongspecies" target="_blank">INSTAGRAM</a></li>
                <li><a href="https://soundcloud.com/kaothaisongspecies" target="_blank">SOUNDCLOUD</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT US</a></li>
                <li><a href="<?php echo esc_url(home_url('/business-card')); ?>">BUSINESS CARD</a></li>


            </ul>
        </div>
    </nav>



    <div class="products">

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/1ecom.jpg"></a>
            <div class="name">Tess Top</div>
            <div class="price">90 €</div>
        </div>

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/3ecom.jpg"></a>
            <div class="name">The Corset</div>
            <div class="price">140 €</div>
        </div>

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/6ecom.jpg"></a>
            <div class="name">The Vampire</div>
            <div class="price">120 €</div>
        </div>

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/8ecom.jpg"></a>
            <div class="name">Tote Bag</div>
            <div class="price">80 €</div>
        </div>

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/10ecom.jpg"></a>
            <div class="name">Tote Bag</div>
            <div class="price">80 €</div>
        </div>

        <div class="product-img">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/12ecom.jpg"></a>
            <div class="name">Mask</div>
            <div class="price">20 €</div>
        </div>

    </div>





    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>