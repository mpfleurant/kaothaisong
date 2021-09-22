<?php
/* Template Name: SIZE */
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



    <section class="terms-section">

        <h2>SIZE GUIDE</h2>
        <br>

        <h4>MEASUREMENTS</h4>
        <p>Chest  : the meter must go through the nipples.
            <br>
            Waist :  deepest part between the chest (bust) and the hips.
            <br>
            Hips : most voluminous part of the body the meter goes through the buttocks.
        </p>

        <h4>WOMEN'S</h4>
        <p>Measurements shown in centimeters.  Denim sizing in inches.
        </p>


        <div class="size-guide">
        <h4>TOPS</h4>
        <div class="body-type">
            <p>Chest</p>
            <p>Waist</p>
            <p>Hips</p>
        </div>

        <div class="sizing">
            <p>XS</p>
            <p>S</p>
           <p>M</p>
            <p>L</p>
        </div>

            <div class="size-nb">
                <div class="xs">
                <p>78-81</p>
                <p>60-63</p>
                <p>86-88</p>
                </div>

                <div class="xs">
                    <p>82-85</p>
                    <p>65-67</p>
                    <p>90-92</p>
                </div>

                <div class="xs">
                    <p>86-89</p>
                    <p>69-71</p>
                    <p>94-96</p>
                </div>

                <div class="xs">
                    <p>90-92</p>
                    <p>73-75</p>
                    <p>96-100</p>
                </div>
            </div>
        </div>




        <div class="size-guide">
            <h4>PANTS</h4>
            <div class="body-type">
                <p>FR</p>
                <p>CA</p>
                <p>UK</p>
                <p>US</p>
            </div>

            <div class="sizing">

            </div>

            <div class="size-nb">
                <div class="xs">
                    <p>34</p>
                    <p>25”/26”</p>
                    <p>6</p>
                    <p>2</p>
                </div>

                <div class="xs">
                    <p>36</p>
                    <p>26”/27”</p>
                    <p>8</p>
                    <p>4</p>
                </div>

                <div class="xs">
                    <p>38</p>
                    <p>27”/28”</p>
                    <p>10</p>
                    <p>6</p>
                </div>

                <div class="xs">
                    <p>40</p>
                    <p>28”/29”</p>
                    <p>11</p>
                    <p>8</p>
                </div>

            </div>
        </div>


        <h4>MEN'S</h4>
        <p>Measurements shown in centimeters.  Denim sizing in inches.
        </p>



        <div class="size-guide">
            <h4>TOPS</h4>
            <div class="body-type">
                <p>Chest</p>
                <p>Waist</p>

            </div>

            <div class="sizing">
            <p>S</p>
            <p>M</p>
            <p>L</p>
                <p> </p>
            </div>

            <div class="size-nb">
                <div class="xs">
                    <p>88-92</p>
                    <p>76-80</p>
                </div>

                <div class="xs">
                    <p>104-108</p>
                    <p>84-88</p>
                </div>

                <div class="xs">
                    <p>96-100</p>
                    <p>92-96</p>
                </div>
            </div>

        </div>


            <div class="size-guide">
                <h4>PANTS</h4>
                <div class="body-type">
                    <p>FR</p>
                    <p>CA</p>
                    <p>UK</p>
                    <p>US</p>
                </div>

                <div class="sizing">

                </div>

                <div class="size-nb">
                    <div class="xs">
                        <p>46</p>
                        <p>28”/29”</p>
                        <p>36</p>
                        <p>36</p>
                    </div>

                    <div class="xs">
                        <p>48</p>
                        <p>30”/31”</p>
                        <p>38</p>
                        <p>38</p>
                    </div>

                    <div class="xs">
                        <p>50</p>
                        <p>31”/32”</p>
                        <p>40</p>
                        <p>40</p>
                    </div>


                </div>




    </section>





</div>






    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
