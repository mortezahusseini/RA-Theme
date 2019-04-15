<?php
// edited by mohammad reza shirnejad
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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


if (!defined('ABSPATH')) {
    exit;
}
$product = wc_get_product(get_the_ID());
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="video lg-rounded">
    <video src="" class="w-100" controls autoplay></video>
</div>
<section>
    <div class="card lg-rounded my-3 shadow">
        <div class="card-body">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="card-title text-right">
                <h5 class="text-danger"> آخرین به روز رسانی </h5>
                <ul class="list-unstyled">
                    <li>  <?php echo $product-> get_date_created();?>  </li>
                    <li> ۱۱ آذر سال ۱۳۹۷ - desceription </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="card lg-rounded shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-12">
                    <a href="#"> <img src="assets/images/stapler-dcfx2l.jpg" class="w-100 h-auto">
                        <p> دسترسی دایمی به آموزش </p>
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="#"> <img src="assets/images/education.jpg" class="w-100 h-auto" alt="random">
                        <p> سازگار با تپ لپ موبایل  </p>
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="#"> <img src="assets/images/education.jpg" class="w-100 h-auto" alt="random">
                        <p> پشتیبانی مدرس دوره </p>
                    </a>
                </div>
                <div class="col-md-3 col-12">
                    <a href="#"> <img src="assets/images/education.jpg" class="w-100 h-auto" alt="random">
                        <p> قابل دانلود </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="card my-2 lg-rounded shadow">
        <div class="card-title pr-3 py-3 border-dark rounded-top">
            <h5 class="text-right d-inline-block text-primary d-flex align-items-center float-right"> <i class="fas fa-graduation-cap color-red animated infinite position-relative ml-2 rubberBand slow delay-0s"></i> جلسات دوره </h5>
        </div>
        <div class="card-body w-100">
            <ol class="list-unstyled product_course w-100 px-0">
                <li>
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
                        <!-- Accordion card -->
                        <div class="card border-0">

                            <!-- Card header -->
                            <div class="" role="tab" id="headingTwo2">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                                   aria-expanded="false" aria-controls="collapseTwo21">
                                    <div class="row mx-0">
                                        <div class="col-2 h-100">
                                            <img src="<?php echo get_template_directory_uri().'/assets/images/download.png' ?>" class="w-100 section_image h-auto float-right" alt="">
                                        </div>
                                        <div class="col-10">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="title float-right">
                                                    <h5 class="text-right"> قسمت ۱ : گرافیک </h5>
                                                    <p class="text-gray"> داداش دوره خوبی اه به جان سیبیلات قسم </p>
                                                </div>
                                                <div class="flat-left"> <i class="fas fa-angle-down rotate-icon"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapseTwo21" class="collapse " role="tabpanel" aria-labelledby="headingTwo21" data-parent="#accordionEx1">
                                <div class="card-body">
                                    <ul class="list-unstyled border-right">
                                        <li>
                                            <a href="">
                                                <div class="row">
                                                    <div class="">
                                                        <i class="fas fa-arrow-alt-circle-down text-gray fa-3x"></i>
                                                    </div>
                                                    <div class="col-10 text-right">
                                                        <h6> جلسه ۱ : آموزش بینید. حال کنید.  </h6>
                                                        <p class="text-gray">  ۳۶ دقیقه </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="row">
                                                    <div class="">
                                                        <i class="fas fa-arrow-alt-circle-down text-gray fa-3x"></i>
                                                    </div>
                                                    <div class="col-10 text-right">
                                                        <h6> جلسه ۱ : آموزش بینید. حال کنید.  </h6>
                                                        <p class="text-gray">  ۳۶ دقیقه </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </li>

            </ol>
        </div>
    </div>
</section>
<section>
    <div class="card my-2  p-3 shadow lg-rounded">
        <div class="card my-2 w-100 text-right shadow rounded">
            <a href="">
                <div class="row mx-0 py-2">
                    <div class="border-left col-1 d-flex align-items-center"> <i class="fas fa-angle-down text-primary"></i> </div>
                    <div class="col-10"> <h5> چرا این آموزش ؟؟؟ </h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-2 w-100 text-right shadow rounded">
            <a href="">
                <div class="row mx-0 py-2">
                    <div class="border-left col-1 d-flex align-items-center"> <i class="fas fa-angle-down text-primary"></i> </div>
                    <div class="col-10"> <h5> چرا این آموزش ؟؟؟ </h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-2 w-100 text-right shadow rounded">
            <a href="">
                <div class="row mx-0 py-2">
                    <div class="border-left col-1 d-flex align-items-center"> <i class="fas fa-angle-down text-primary"></i> </div>
                    <div class="col-10"> <h5> چرا این آموزش ؟؟؟ </h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-2 w-100 text-right shadow rounded">
            <a href="">
                <div class="row mx-0 py-2">
                    <div class="border-left col-1 d-flex align-items-center"> <i class="fas fa-angle-down text-primary"></i> </div>
                    <div class="col-10"> <h5> چرا این آموزش ؟؟؟ </h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card my-2 w-100 text-right shadow rounded">
            <a href="">
                <div class="row mx-0 py-2">
                    <div class="border-left col-1 d-flex align-items-center"> <i class="fas fa-angle-down text-primary"></i> </div>
                    <div class="col-10"> <h5> چرا این آموزش ؟؟؟ </h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="card shadowmy-2  lg-rounded border">
        <div class="card-title pr-3 py-2 border-dark border-bottom rounded-top">
            <h5 class="text-right d-inline-block text-primary d-flex align-items-center float-right"> <i class="fa fa-info color-red animated infinite swing slow delay-0s pl-3"></i> مشخصات دوره </h5>
        </div>
        <div class="card-body pt-0">
            <div class="price text-center">
                <p >  قیمت  <span class="text-success"> <?php  echo $price = get_post_meta( get_the_ID(), '_regular_price', true) ?> تومان</span></p>
            </div>
            <button class="btn btn-success w-100"> شرکت در این دوره </button>
            <div class="info">
                <ul class="list-unstyled text-right p-3">

                    <li>
                        <i class="fas fa-award"></i>
                        دریافت هدیه
                    </li>
                    <hr/>
                    <li>
                        <i class="fas text-gray fa-certificate"></i>
                        تعداد جلسات :
                        <span> ۱۶ </span>
                        جلسه
                    </li>
                    <hr/>
                    <li>
                        <i class="fas text-gray fa-list-alt"></i>
                        دسته بندی :
                        <?php
                        $terms = get_the_terms( get_the_ID(), 'product_cat' );

                        foreach ($terms as $term) {

                            echo '<a  href="" <span itemprop="name" class="product-title text-success entry-title">'.$term->name.'</span></a>';
                        }

                        ?>
                    </li>
                    <hr/>
                    <li>
                        زمان کل دوره
                        <span>  </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="card shadow lg-rounded w-100 my-3">
        <div class="card-title bg-gray-200 rounded-top py-2 pr-3">
            <h6 class="text-primary d-flex align-items-center text-right"><i class="fas fa-comment pl-2 animated infinite position-relative color-red mt-1 rubberBand slow delay-0s"></i> دیدگاهتان را بنویسید </h6>
        </div>
        <div class="card-body">

            <?php if ( comments_open()) : ?>
                <?php
                $args = array(
                    'id_form'           => 'commentform',
                    'id_submit'         => 'submit',
                    'class_submit'         => 'btn btn-danger mt-3 has_icon',
                    'title_reply'       => __( '' ),
                    'title_reply_to'    => __( 'ارسال پاسخ به %s' ),
                    'cancel_reply_link' => __( 'لغو پاسخ' ),
                    'label_submit'      => __( 'Post Comment' ),

                    'comment_field' =>  '<textarea name="comment" id="" class="col-12 rounded form-control" rows="12" placeholder="متن دیدگاه">' .'</textarea>',

                    'must_log_in' => 'You Should login to send comment',

                    'logged_in_as' => '<p class="logged-in-as text-right">' .
                        sprintf(
                            __( 'شما   <a href="%1$s">%2$s</a> وارد شده اید <a class="text-danger" href="%3$s" title="خروج از این حساب کاربری ">خارج می‌شوید؟</a>' ),
                            admin_url( 'profile.php' ),
                            $user_identity,
                            wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                        ) . '</p>',

                    'comment_notes_before' => '',

                    'comment_notes_after' => '',

                    'fields' => apply_filters( 'comment_form_default_fields', array(

                            'author' =>'<input id="author" type="text" class="form-control float-right mt-3 w-100 w-md-48" placeholder="نام" name="author" value="' . esc_attr( $commenter['comment_author'] ) .'"/>',

                            'email' =>'<input id="email" name="email" placeholder="ایمیل" class="form-control float-left w-100 w-md-48 mt-3 mt-3" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"/> ',
                        )
                    ),
                );

                comment_form( $args, get_the_ID() );
                ?>
            <?php endif; ?>
        </div>
        <hr class="text-gray my-0">
        <div class="card-body">
            <br>
            <div class="row d-flex px-3 align-content-center justify-content-between">
                <p class="text-primary text-right float-right"> دیدگاه‌های این نوشته </p>
                <span class="btn bg-gray-100 rounded-bottom-0 text-dark disabled float-left"> دیدگاه شاخص </span>
            </div>
            <div class="text-center bg-gray-100 d-flex align-items-center">
                <div class="card-body rounded w-100 m-3 text-center bg-white">

                    <div class="row mx-0">
                        <div class="col-lg-2 col-6">
                            <?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
                        </div>
                        <div class="col-lg-3 col-6 px-0 text-right">
                            <div class="name">
                                <a href="" class="name_relation w-100 text-gray"> <?php the_author_link(); ?> </a>
                            </div>
                            <div class="badges">
                                                <span class="text-gray text-small">
                                                     <?php
                                                     global $wp_query;
                                                     $registered = jdate( "l d M Y", strtotime( get_the_author_meta( 'user_registered', $wp_query->queried_object_id ) ) );
                                                     echo 'عضویت از تاریخ ' . $registered;
                                                     ?>
                                                </span>
                            </div>
                        </div>
                    </div>
                    <hr class="text-gray my-3">
                    <p class="text-right"><?php the_author_meta('description'); ?></p>
                    <div class="text-left">
                        <?php mw_Likes(get_the_ID()); ?>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="card-body py-0 text-center mr-auto ml-auto">
            <div class="row py-3 text-center mr-auto ml-auto">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 127,
                    'prev_text' => __( '<i class="fas fa-long-arrow-alt-right"></i>', 'textdomain' ),
                    'next_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>', 'textdomain' ),
                    'screen_reader_text' => __( '&nbsp;' )
                ) );
                ?>
            </div>
        </div>
        <div class="card-body py-3 w-100 position-relative">
            <ol class="pr-0 h-100 list-unstyled">
                <?php comments_template(); ?>
            </ol>
        </div>
        <div class="card-body py-0 text-center mr-auto ml-auto">
            <div class="row py-3 text-center mr-auto ml-auto">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 127,
                    'prev_text' => __( '<i class="fas fa-long-arrow-alt-right"></i>', 'textdomain' ),
                    'next_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>', 'textdomain' ),
                    'screen_reader_text' => __( '&nbsp;' )
                ) );
                ?>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */

?>

<?php //do_action('woocommerce_after_single_product'); ?>




