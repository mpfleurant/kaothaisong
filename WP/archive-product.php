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
                <li><a class="current" href="<?php echo esc_url(home_url('/shop')); ?>">SHOP</a></li>



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


    <ul class="currency">

        <?php

        global $woocommerce;


        ?>

        <li><a href="<?php echo esc_url(home_url('/cart')); ?>">CART (<?php echo $woocommerce->cart->cart_contents_count; ?>)</a></li>

    </ul>


<!--    <i class="fas fa-shopping-bag"></i>-->


    <?php
    $params = array('posts_per_page' => -1, 'post_type' => 'product');
    $wc_query = new WP_Query($params);
    $product = new WC_Product(get_the_ID());
    ?>
    <div class="products">

        <?php if ($wc_query->have_posts()) : ?>
            <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
                <li>

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <p>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            <br>
                            <?php echo $product->get_price_html(); ?>
                        </a>
                    </p>




                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
            <li>
                <?php _e( 'No Products' ); ?>
            </li>
        <?php endif; ?>







    </div>
</div>


    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

