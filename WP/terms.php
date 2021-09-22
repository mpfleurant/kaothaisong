<?php
/* Template Name: TERMS */
?>


<?php get_header(); ?>

<body class="aboutus-page">

<div class="terms">

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
                <li><a href="">INSTAGRAM</a></li>
                <li><a href="">SOUNDCLOUD</a></li>
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
                <li><a href="https://soundcloud.com/user-881279914" target="_blank">SOUNDCLOUD</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT US</a></li>
                <li><a href="<?php echo esc_url(home_url('/business-card')); ?>">BUSINESS CARD</a></li>


            </ul>
        </div>
    </nav>


<section class="terms-section">

    <h2>TERMS AND CONDITIONS</h2>
    <br>

    <h4>PAYMENTS</h4>
    <p>All prices are listed in Euro. Payments for products purchased on kaothaisong.com are accepted through Paypal. We accept payments Visa, Mastercard, American Express and Paypal.
    </p>


    <h4>SHIPPING</h4>
    <p>Free Shipping Worldwide.</p>

    <h4>ORDER PROCESSING</h4>
    <p>Please allow between 1-3 business days for order processing. Once your order has been processed item(s) will be shipped within 48 hours. Orders are not shipped or delivered on weekends or local public holidays. Orders are shipped via Canada Post in Europe. We offer global shipping to all destinations.
        For Canada and United States delivery estimate 1 week. For Europe and the rest of the world delivery estimate between 2  weeks. 	</p>

    <h4>LOCAL TAXES</h4>
    <p>Please note that local charges (sales tax, customs duty) may occur, depending on your region and local customs duties.
        These charges are at the customers own expense.</p>

    <h4>SERVICE DELAYS</h4>
    <p>Kaothaisong Species is not responsible for unexpected shipping delays caused by external circumstances which may delay the delivery of your order (clearance delays, customs and tax, etc).
        Kaothaisong Species is not responsible for lost, stolen, wrong address or missing packages. For support, email us at contact@kaothaisongspecies.com </p>

    <h4>RETURNS AND EXCHANGES</h4>
    <p>Note that size and colour options can not be changed once your order has been confirmed. Please read our sizing guide carefully before purchasing.
        We do not accept returns. For special inquiries, email us at contact@kaothaisongspecies.com </p>

</section>






</div>



<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
