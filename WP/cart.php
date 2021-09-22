<?php
/* Template Name: cart */
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

















    <?php


/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <?php do_action( 'woocommerce_before_cart_table' ); ?>

        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
<!--            <thead>-->
<!--            <tr>-->
<!--                <th class="product-remove">&nbsp;</th>-->
<!--                <th class="product-thumbnail">&nbsp;</th>-->
<!--                <th class="product-name">--><?php //esc_html_e( 'Product', 'woocommerce' ); ?><!--</th>-->
<!--                <th class="product-price">--><?php //esc_html_e( 'Price', 'woocommerce' ); ?><!--</th>-->
<!--                <th class="product-quantity">--><?php //esc_html_e( 'Quantity', 'woocommerce' ); ?><!--</th>-->
<!--                <th class="product-subtotal">--><?php //esc_html_e( 'Subtotal', 'woocommerce' ); ?><!--</th>-->
<!--            </tr>-->
<!--            </thead>-->
            <tbody>
            <?php do_action( 'woocommerce_before_cart_contents' ); ?>

            <?php
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    ?>
                    <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                        <td class="product-remove">
                            <?php
                            echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                'woocommerce_cart_item_remove_link',
                                sprintf(
                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                    esc_html__( 'Remove this item', 'woocommerce' ),
                                    esc_attr( $product_id ),
                                    esc_attr( $_product->get_sku() )
                                ),
                                $cart_item_key
                            );
                            ?>
                        </td>

                        <td class="product-thumbnail">
                            <?php
                            $thumbnail = apply_filters( 'woocommerce_single', $_product->get_image(), $cart_item, $cart_item_key );

                            if ( ! $product_permalink ) {
                                echo $thumbnail; // PHPCS: XSS ok.
                            } else {
                                printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                            }
                            ?>
                        </td>

                        <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                            <?php
                            if ( ! $product_permalink ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                            } else {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                            }

                            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                            // Meta data.
                            echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                            // Backorder notification.
                            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                            }
                            ?>
                        </td>

                        <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                            <?php
                            echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                            ?>
                        </td>




                        <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                            <?php
                            if ( $_product->is_sold_individually() ) {
                                $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                            } else {
                                $product_quantity = woocommerce_quantity_input(
                                    array(
                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                        'input_value'  => $cart_item['quantity'],
                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                        'min_value'    => '0',
                                        'product_name' => $_product->get_name(),
                                    ),
                                    $_product,
                                    false
                                );
                            }

                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                            ?>
                        </td>

                        <td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                            <?php
                            echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

            <?php do_action( 'woocommerce_cart_contents' ); ?>

            <tr>
                <td colspan="6" class="actions">

                    <?php if ( wc_coupons_enabled() ) { ?>
                        <div class="coupon">
                            <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
                            <?php do_action( 'woocommerce_cart_coupon' ); ?>
                        </div>
                    <?php } ?>

                    <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

                    <?php do_action( 'woocommerce_cart_actions' ); ?>

                    <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </td>
            </tr>

            <?php do_action( 'woocommerce_after_cart_contents' ); ?>
            </tbody>
        </table>
        <?php do_action( 'woocommerce_after_cart_table' ); ?>


<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

    <div class="cart-collaterals">
        <?php
        /**
         * Cart collaterals hook.
         *
         * @hooked woocommerce_cross_sell_display
         * @hooked woocommerce_cart_totals - 10
         */
        do_action( 'woocommerce_cart_collaterals' );
        ?>
    </div>
    </form>

<?php do_action( 'woocommerce_after_cart' ); ?>

</div>
</body>

<?php get_footer(); ?>
<?php wp_footer(); ?>
