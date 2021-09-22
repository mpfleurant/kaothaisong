<?php
/* Template Name: 2020 */
?>

<?php get_header(); ?>

<body class="archive-page">

<div class="archive">
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
                    <li><a class="current" href="<?php echo esc_url(home_url('/2020-2')); ?>">2020</a></li>
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




    <div class="grid">

        <h2 class="titre">2020</h2>

        <div class="grid-col"></div>
        <div class="grid-col"></div>
        <div class="grid-col"></div>

        <?php


        $images = get_field('gallery_2020');


       if( $images ): ?>
<?php foreach( $images as $image ): ?>


         <!--Trigger the Modal-->
        <img id="myImg" class="modal-img" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>



               <!--The Modal-->
        <div id="myModal" class="modal">

                   <!--Close btn-->
<!--            <span class="close">&times;</span>-->

                   <!--the img-->
            <img class="modal-content" id="img01" onclick="" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="">

                   <!--the caption text-->
            <div id="caption"></div>

        </div>

        <?php endforeach; ?>
        <?php endif; ?>






    </div>


    </div>

<?php get_footer(); ?>
<?php wp_footer(); ?>



<script>
    // Get the modal
    var modal = document.getElementById("myModal");


    // Get the image and insert it inside the modal - use its "alt" text as a caption
    //var img = document.getElementById("myImg");
    var img = document.getElementsByClassName('modal-img');

    for(var i=0; i<img.length; i++){

        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img[i].addEventListener('click',function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        })
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }


</script>

</body>
