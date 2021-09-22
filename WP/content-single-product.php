// remove product summary elements
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

// Custom content
printf('<h1>This is the <b>'.$post->post_name.' </b>poster</h1>');
printf('<h4>A full customized product page for the "posters" category products</h4>');
// Description
printf('<h5>'.$post->post_excerpt.'</h5>');
//thumbnail
do_action( 'woocommerce_before_single_product_summary' );

//add meta
do_action( 'woocommerce_single_product_summary');
// shortcodes
echo do_shortcode('[add_to_cart id="'.$post->ID.'" show_price="false" style="border:none;" class="my-addtocart"]'); echo "<h3>Contact:</h3>".do_shortcode('[wpforms id="1082"]'); echo "<h3>More posters:</h3>".do_shortcode('[product_category category="posters" orderby="desc" limit="4"]');