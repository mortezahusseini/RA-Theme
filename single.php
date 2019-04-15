
<?php get_header();?>
<main class="py-sm-3 bg-gray-100" onclick="hide_main_list()" dir="rtl">

    <div class="container hidden-xs hidden-sm">
        <div class="row">
            <div class="col-12 px-0">
                <div class="row w-100 m-0">
                    <div class="list text-right border bg-small lg-rounded bg-white w-100 px-3 shadow" style="min-height: 55px;">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12 col-sm-12">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="card border shadow lg-rounded w-100">
                            <div class="card-title pb-2 pr-2 bg-gray-100 rounded-top">
                                <h5 class="text-right text-primary pt-3 d-flex align-items-center pr-3">
                                    <i class="fas fa-file-alt animated infinite swing  position-relative color-red pl-2 rubberBand slow delay-0s"></i>  <?php the_title(); ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="categories text-gray d-flex align-items-center w-xs-100 pr-md-4 pr-3">
                                        <i class="fas fa-list-ul pl-2"></i>
                                        <?php the_category('،&nbsp') ?>
                                    </div>
                                    <div class="date mr-5 pr-4 text-small position-relative pt-1 text-gray">
                                        <i class="far fa-calendar-alt"></i>
                                        <span> <?php the_time('l d M Y'); ?> </span>
                                    </div>
                                    <div class="views mr-5 float-left text-small position-relative pt-1 text-gray">
                                        <i class="fas fa-chart-bar"></i>
                                        <span><?php if(function_exists('the_views')) { the_views(); } ?></span>
                                    </div>
                                    <div class="comments mr-5 float-left text-small position-relative pt-1 text-gray">
                                        <i class="fas fa-comment"></i>
                                        <?php comments_number( ' 0 دیدگاه', '1 دیدگاه', '% دیدگاه' ); ?>
                                    </div>
                                    <div class="rates mr-5 float-left text-small position-relative pt-1 text-gray">

                                    </div>
                                </div>
                                <div class="row mt-3 text-center" dir="ltr">

                                </div>
                                <div class="card-body single-thumbnail text-right" dir="rtl">
                                    <p class="text-justify single_image_thumb"> <?php the_post_thumbnail('online-course-thumb'); the_content();?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'متاسفانه محتوایی برای نمایش وجود ندارد.' ); ?></p>
                    <?php endif; ?>
                    <div class="card shadow border lg-rounded w-100 my-3">
                        <div class="best_relation card-body">
                            <div class="row mx-0">
                                <div class="col-lg-2 col-6">
                                    <?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
                                </div>
                                <div class="col-lg-7 col-6 px-0 text-right">
                                    <div class="name">
                                        <a href="" class="name_relation w-100 text-gray"> <a href="" class="name_relation w-100 text-gray"> <?php the_author_link(); ?> </a> </a>
                                    </div>
                                    <div class="badges">
                                        <span class="text-gray text-small"><?php the_author_meta('description'); ?> </span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 mx-0">
                                    <p class="text-gray text-lg-center text-right pt-2 pr-lg-0 float-left text-small">
                                        <?php
                                        global $wp_query;
                                        $registered = jdate( "l d M Y", strtotime( get_the_author_meta( 'user_registered', $wp_query->queried_object_id ) ) );
                                        echo 'عضویت از تاریخ ' . $registered;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-dark-100 p-0 w-100 lg-rounded rounded-top-0" style="min-height: 60px">
                            <div class="row px-4 text-white d-flex align-items-center h-100">
                                <div class="col-lg-6 col-12 text-right ">
                                    <p class="mb-0"> راه آسانتری برای ارتباط با کاربرانمان پیدا کردیم </p>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="row text-left pl-3" dir="ltr">
                                        <a href="" > <i class="fab fa-linkedin social-icon fa-2x  text-white py-2"></i> </a>
                                        <a href="" > <img src="../../assets/images/aparat.png" style="width: 40px; height: 40px" class="social-icon" alt=""> </a>
                                        <a href="" ><i class="fas fa-paper-plane social-icon  fa-2x text-white text-gray py-2"></i></a>
                                        <a href="" ><i class="fab fa-instagram social-icon  fa-2x text-white text-gray py-2"></i></a>
                                        <a href="" ><i class="fab fa-twitter social-icon  fa-2x text-white text-gray py-2"></i></a>
                                        <a href="" ><i class="fab fa-facebook-f social-icon  fa-2x text-white text-gray py-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow lg-rounded w-100">
                        <div class="">
                            <div class="progress w-100 rounded-top">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="text-right text-justify">
                                        اگر می‌خواهید از آخرین و محبوب‌ترین مقالات ما در ایمیل خود مطلع شوید، همین الان ایمیل خود را در کادر زیر وارد کنید:
                                    </p>
                                    <form action="" class="form-group col-12" method="post">
                                        <div class="row d-flex justify-content-between">
                                            <input type="text" class="form-control" style="width: 48%" placeholder="نام" required>
                                            <input type="tel" class="form-control pr-2" style="width: 48%" placeholder="شماره تلفن" required>
                                        </div>
                                        <div class="row py-2 d-flex justify-content-between">
                                            <input type="email" class="form-control w-xs-100" placeholder="ایمیل" style="width: 80%" required>
                                            <button class="btn btn-success mt-2 mt-lg-0 mx-auto mx-lg-0 float-left"> عضویت  <i class="fas fa-exclamation"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <p class="text-center"> تعداد علاقه‌مندانی که تاکنون عضو خبرنامه ما شده‌اند: </p>
                                    <h2 class="text-center"id="counter"> <span class="count" data-count="54556">0</span> نفر </h2>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            __( 'شما با حساب کاربری  <a href="%1$s">%2$s</a> وارد شده‌اید. <a class="text-danger" href="%3$s" title="خروج از این حساب کاربری ">خارج می‌شوید؟</a>' ),
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
                            <ol class="comment_list pr-0 h-100 list-unstyled">
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
                    <div class="card shadow w-100 lg-rounded my-3">
                        <div class="card-title bg-gray-100 pb-2 mb-0 rounded-top">
                            <h5 class="text-right pr-3 pt-3 text-primary d-flex align-item-center"><i
                                        class="fas fa-microchip animated infinite swing pl-2 text-danger slow delay-0s"></i>  مطالب زیررا حتما بخوانید </h5>
                        </div>
                        <hr class="my-0">
                        <div class="card-body px-0">
                            <div class="row mx-0 px-3">

                                <?php
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    $first_tag = $tags[0]->term_id;
                                    $args=array(
                                        'tag__in' => array($first_tag),
                                        'post__not_in' => array($post->ID),
                                        'showposts'=>8,
                                        'caller_get_posts'=>1
                                    );
                                    $my_query = new WP_Query($args);
                                    if( $my_query->have_posts() ) {
                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                            <div class="best d-flex align-items-center my-1">
                                                <a href="<?php the_permalink(); ?>" class="w-100">
                                                    <div class="image float-right d-inline-block">
                                                        <?php the_post_thumbnail('best-image-thumb'); ?>
                                                    </div>
                                                    <div class="text float-right text-right pr-2 d-inline-block w-60 ">
                                                        <strong class=""> <?php echo the_title(); ?> </strong>
                                                        <br>
                                                        <p class="text-justify text-small mb-0">  <?php echo wp_trim_words( get_the_content(), 17, '...' ); ?> </p>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php
                                        endwhile;
                                    
                                    }
                                     
                                }
                                  
                                ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php get_sidebar(); ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
<script>

</script>
