<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<li class="comment">
    <div class="comment1 h-100 pr-5">
        <?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
        <div class="comment_text h-100 pr-4">
            <div class="pr-1 w-100">
                <p class="float-right mb-0 d-block text-right">
                    <strong class=""> <a href="" class="name_relation w-100 text-gray"><?php echo get_comment_author() ?></a> </strong> <time class="text-primary">
                        <?php  get_comment_date( 'l d M Y در g:i a' ); ?>
                    </time>  <span class="text-small"><br> <?php
                        global $wp_query;
                        $registered = jdate( "l d M Y", strtotime( get_the_author_meta( 'user_registered', $wp_query->queried_object_id ) ) );
                        echo 'عضویت از تاریخ ' . $registered;
                        ?> </span>
                </p>

                <div class="rate_comment d-inline-block">
                    <?php mw_Likes(get_the_ID()); ?>
                </div>
                <div class="reply_comment float-left text-small d-inline-block">
                    <?php comment_reply_link( array_merge($args, array(
                            'reply_text' => __(' <span class="btn btn-outline-danger mx-3">ارسال پاسخ</span>', 'textdomain'),
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth']
                        )
                    )); ?>
                </div>
            </div>
            <br>
            <div class="description text-right w-100">
                <p class="text-right d-block w-100 text-small">
                    <?php  comment_text(); ?>
                <p>
                    <?php if ($comment->comment_approved == '0') : ?>

                    <em>دیدگاه شما منتظر تایید مدیریت است.</em><br />
                </p>
                <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
</li>
