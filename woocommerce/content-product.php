<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-sm-12 d-inline-block mt-3 col-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card shadow online_course rounded-top px-0 h-100">
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('online-course-thumb'); ?> </a>
        <h5 class="card-title text-right pr-2 pt-3"> <?php the_title(); ?> </h5>
        <hr>
        <div class="text-right w-100 pr-3 text-danger">
            <?php echo $product -> get_price_html();?>
        </div>
        <p class="card-text text-justify"> <?php the_content(); ?>  </p>
        <button class="btn btn-secondary border-bottom rounded-top-0 w-100"> اطلاعات بیشتر </button>
    </div>
</div>
