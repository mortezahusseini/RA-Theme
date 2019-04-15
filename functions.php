
<?php


function load_files(){
     wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri().'/assets/css/style.css', false );
    wp_enqueue_style( 'icon', get_template_directory_uri().'/assets/css/icon.min.css', false );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css', false );
    wp_enqueue_style( 'owl_theme', get_template_directory_uri().'/assets/css/owl.carousel.min.css', false );
    wp_enqueue_style( 'owl_carousel', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', false );

    wp_enqueue_script( 'jquery.min', get_template_directory_uri().'/assets/js/jquery-3.3.1.min.js', '1.0', 'true' );
    wp_enqueue_script( 'popper.min', get_template_directory_uri().'/assets/js/popper.min.js',array('jquery'), '1.0', 'false' );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), '1.0', 'false' );
    wp_enqueue_script( 'slide', get_template_directory_uri().'/assets/js/slide.js',array(), '1.0', 'false' );
    wp_enqueue_script( 'sticky', get_template_directory_uri().'/assets/js/jquery.sticky-kit.min.js',array(), '1.0', 'false' );
    wp_enqueue_script( 'scroll', get_template_directory_uri().'/assets/js/scroll.js',array(), '1.0', 'false' );
    wp_enqueue_script( 'app', get_template_directory_uri().'/assets/js/app.js',array(), '1.0', 'false' );
    wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts','load_files');

add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_meta_boxes', '__return_true' );
include_once( 'admin/option-tree/ot-loader.php' );
include_once( 'admin/theme-options.php' );
include_once( 'admin/theme-metabox.php' );

require_once( get_template_directory() . '/libs/custom-ajax-auth.php' );
function config_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'منوی اصلی ' ),
            'footer-menu' => __( 'منوی فوتر ' ),
            'mobile-menu' => __( 'منوی موبایل ' ),
            'sidebar-menu' => __( 'منوی سایدبار ' ),
        )
    );
}
add_action( 'init', 'config_menus' );

function sidebar_register() {

    register_sidebar( array(
        'name'          => 'سایدبار تبلیغاتی قالب',
        'id'            => 'left_sidebar',
        'before_widget' => '<div class="box card shadow w-100 lg-rounded mb-3">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'sidebar_register' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function the_breadcrumb() {
    $sep = '<i class="fas px-1 fa-chevron-left"></i>';
    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs d-flex align-items-center h-100">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' > ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}

add_theme_support( 'post-thumbnails' );
add_image_size( 'best-image-thumb', 75, 75, true );
add_image_size( 'article-thumb-75', 125, 125, true );
add_image_size( 'article-thumb', 215, 215, true );
add_image_size( 'online-course-thumb', 215, 215, true );
?>

<?php
function advanced_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
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
                <div class="reply_comment text-small d-inline-block">
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
<?php } ?>

<?php
function likeThis($post_id,$action = 'get') {

    if(!is_numeric($post_id)) {
        error_log("خطا : مقدار عددي براي post_id ارسال نشده است");
        return;
    }

    switch($action) {

        case 'get':
            $data = get_post_meta($post_id, '_likes');

            if(!is_numeric($data[0])) {
                $data[0] = 0;
                add_post_meta($post_id, '_likes', '0', true);
            }

            return $data[0];
            break;


        case 'update':
            if(isset($_COOKIE["like_" . $post_id])) {
                return;
            }

            $currentValue = get_post_meta($post_id, '_likes');

            if(!is_numeric($currentValue[0])) {
                $currentValue[0] = 0;
                add_post_meta($post_id, '_likes', '1', true);
            }

            $currentValue[0]++;
            update_post_meta($post_id, '_likes', $currentValue[0]);

            setcookie("like_" . $post_id, $post_id,time()+(60*60*24*365));
            break;

    }

}
//comment like
function mw_Likes($post_id) {
    $likes = likeThis($post_id);

    $who = ' <i class="fas fa-thumbs-up"></i> ';
    if($likes == 1) {
        $who = ' <i class="fas fa-thumbs-up"></i> ';
    }
    if(isset($_COOKIE["like_" . $post_id])) {
        print '<a href="#" class="likeThis like btn border done" id="like-'.$post_id.'">'.$likes.$who.' </a>';
        return;
    }
    print '<a href="#" class="likeThis like btn border" id="like-'.$post_id.'">'.$likes.$who.'</a>';
}
function setUpPostLikes($post_id) {
    if(!is_numeric($post_id)) {
        error_log("خطا : مقدار عددي براي post_id ارسال نشده است");
        return;
    }
    add_post_meta($post_id, '_likes', '0', true);
}
function checkHeaders() {
    if(isset($_POST["likepost"])) {
        likeThis($_POST["likepost"],'update');
    }

}
function jsIncludes() {
    wp_enqueue_script('jquery');
    wp_register_script('Mw-likesScript',
        get_template_directory_uri(). '/assets/js/Mw-likesScript.js' );
    wp_enqueue_script('Mw-likesScript',array('jquery'));

}
add_action ('publish_post', 'setUpPostLikes');
add_action ('init', 'checkHeaders');
add_action ('get_header', 'jsIncludes');



?>

