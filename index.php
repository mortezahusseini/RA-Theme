
<?php get_header();
wp_enqueue_script( 'carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(), '1.0', 'false' );

?>

<main class="bg-gray-100"  onclick="hide_main_list()">
    <div class="container pt-2 pt-md-5">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12 col-sm-12">
                    <div class="card lg-rounded px-0 shadow w-100">
                        <div class="owl-carousel text-center slider_box d-block">
                            <div class="lg-rounded slider h-100 w-100" >
                                <a href="<?php  echo ot_get_option("first_slider_link")?>"><img src="<?php  echo ot_get_option("first_slider")?>" alt="اسلایدر"></a>
                            </div>
                            <div class="lg-rounded slider  h-100 w-100" >
                                <a href="<?php  echo ot_get_option("second_slider_link")?>"><img src="<?php  echo ot_get_option("second_slider")?>" alt="اسلایدر"></a>
                            </div>
                            <div class="lg-rounded slider  h-100 w-100" >
                                <a href="<?php  echo ot_get_option("third_slider_link")?>"><img src="<?php  echo ot_get_option("third_slider")?>" alt="اسلایدر"></a>
                            </div>
                        </div>
                    </div>
            
                    <div class="card videos w-100 lg-rounded mx-0 my-3">
                        <div class="card-title pr-3 bg-gray-100 pt-3 pb-2 border-dark rounded-top">
                            <h5 class="text-right d-flex text-primary align-item-center d-inline-block float-right"><i class="fas fa-video color-red animated infinite position-relative pl-2 rubberBand slow delay-0s"></i> ویدیو ها  </h5>
                            <a href="#" class="float-left text-primary pl-3"> <i class="fas fa-plus"></i> همه ویدیوها </a>
                        </div>
                        <div class="card-body pb-2 pt-0 mx-0">
                            <div class="row d-md-flex py-2 px-1 justify-content-between">
                                <div class="video px-2 col-12 col-md-6 mt-3 mt-md-0 col-lg-4 lg-rounded">
                                    <img class="position-relative lg-rounded" src="<?php echo get_option('robot_afzar_first_video_picture'); ?>" alt="">
                                    <a href="#img1" class="btn">
                                        <i class="pl-3 position-absolute hover-blue far fa-play-circle fa-3x text-danger" style="z-index:10"></i>
                                    </a>
                                </div>
                                <div class="video px-2 col-12 col-md-6 mt-3 mt-md-0 col-lg-4 lg-rounded">
                                    <img class="position-relative lg-rounded" src="<?php echo get_option('robot_afzar_second_video_picture'); ?>" alt="">
                                    <a href="#img2" class="btn">
                                        <i class="pl-3 position-absolute hover-blue far fa-play-circle fa-3x text-danger" style="z-index:10"></i>
                                    </a>
                                </div>
                                <div class="video px-2 col-12 col-md-6 mt-3 mt-md-0 col-lg-4 lg-rounded">
                                    <img class="position-relative lg-rounded" src="<?php echo get_option('robot_afzar_third_video_picture'); ?>" alt="">
                                    <a href="#img3" class="btn">
                                        <i class="pl-3 position-absolute hover-blue far fa-play-circle fa-3x text-danger" style="z-index:10"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="">
                                <a href="#_" class="lightbox position-fixed w-100 h-100 text-center" id="img1">
                                    <div id="videoModal" class="modal w-100" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="false" style="display: block;">
                                        <div class="modal-header text-right mt-5">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body my-5">
                                            <video class="video1" src="https://hw4.cdn.asset.aparat.com/aparat-video/c54ce98c921485b8c40c47c7979b050412458570-480p__44162.mp4" controls></video>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </a>
                                <a href="#_" class="lightbox position-fixed w-100 h-100 text-center" id="img2">
                                    <div id="videoModal" class="modal w-100" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="false" style="display: block;">
                                        <div class="modal-header text-right mt-5">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body  my-5">
                                            <video class="video2" src="https://www.aparat.com/video/video/embed/videohash/b4ylj/vt/frame" controls></video>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </a>
                                <a href="#_" class="lightbox position-fixed w-100 h-100 text-center" id="img3">
                                    <div id="videoModal" class="modal w-100" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="false" style="display: block;">
                                        <div class="modal-header text-right mt-5">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body  my-5">
                                            <video class="video3" src="https://hw4.cdn.asset.aparat.com/aparat-video/c54ce98c921485b8c40c47c7979b050412458570-480p__44162.mp4" controls></video>
                                        </div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card articles w-100 lg-rounded my-3">
                        <div class="card-title bg-gray-100 pr-3 pt-3 pb-2 border-dark rounded-top">
                            <h5 class="text-right text-primary d-flex align-item-center float-right"><i
                                        class="fas fa-microchip animated color-red infinite swing slow pl-2 delay-0s"></i> جدیدترین
                                مقالات آموزشی </h5>
                            <div class="material-switch float-left h-100 d-flex align-items-center pl-3" dir="ltr">
                                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                                <label for="someSwitchOptionDefault" class="label-default"> </label> <span class="pb-2"> محبوب ترین ها </span>
                            </div>
                        </div>
                        <div class="px-4" id="filter">
                            <form class="row text-center" method="post" action="<?php $_SERVER ?>">
                                <select name="options[foo]" id="adjective" class=" text-gray mt-3 mx-lg-3 d-inline-block form-control col-12 col-md-5 mx-md-3 col-lg-3 float-right">
                                    <option value="1" <?php if ( $options['foo'] == 1 ) echo 'selected="selected"'; ?>>جدیدترین مطالب</option>
                                    <option value="2" <?php if ( $options['foo'] == 2 ) echo 'selected="selected"'; ?>>قدیمی ترین مطالب</option>
                                    <option value="3" <?php if ( $options['foo'] == 3 ) echo 'selected="selected"'; ?>>محبوب ترین مطالب</option>
                                </select>
                                <select name="options[foo]" id="all_time" class=" text-gray mt-3 mx-lg-3 d-inline-block form-control col-xs-12 col-md-5 mx-md-3 col-lg-3 float-right">
                                    <option value="1" <?php if ( $options['foo'] == 1 ) echo 'selected="selected"'; ?>>همه زمان ها</option>
                                    <option value="2" <?php if ( $options['foo'] == 2 ) echo 'selected="selected"'; ?>>تا یک هفته قبل</option>
                                    <option value="3" <?php if ( $options['foo'] == 3 ) echo 'selected="selected"'; ?>>تا یک ماه قبل</option>
                                    <option value="4" <?php if ( $options['foo'] == 4 ) echo 'selected="selected"'; ?>>تا یک سال قبل</option>
                                </select>
                                <select name="options[foo]" id="category" class=" text-gray mt-3 mx-lg-3 d-inline-block form-control col-xs-12 col-md-5 mx-md-3 col-lg-3 float-right">
                                    <option value="1" <?php if ( $options['foo'] == 1 ) echo 'selected="selected"'; ?>>همه دسته بندی ها</option>
                                    <option value="2" <?php if ( $options['foo'] == 2 ) echo 'selected="selected"'; ?>>ویدیو آموشی</option>
                                    <option value="3" <?php if ( $options['foo'] == 3 ) echo 'selected="selected"'; ?>>مقالات آموشی</option>
                                    <option value="4" <?php if ( $options['foo'] == 4 ) echo 'selected="selected"'; ?>>آموزش آنلاین</option>
                                </select>
                                <button type="submit" name="filter" class="btn btn-success mt-3 float-left"> صافی</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="row">
        
                                <?php
                                $the_query = new WP_Query(array('post_type' => 'post')); ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <article class="col-12 col-md-6 col-lg-4 mt-3 lg-rounded d-inline-block">
                                            <figure class="card shadow article lg-rounded px-0 h-100">
                                                <header>
                                                     <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('article-thumb'); ?> </a>
                                                </header>
                                                <header>
                                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title text-right pr-2 pt-3"> <?php the_title(); ?> </h5></a>
                                                </header>
                                                <hr>
                                                <summary class="text-right w-100 pr-3" style="min-height:20px">
                                                 <?php echo wp_trim_words( get_the_content(), 17, '...' ); ?>
                                                </summary>
                                            </figure>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('متاسفانه محتوایی برای نمایش وجود ندارد.'); ?></p>
                                <?php endif; ?>                     
                            </div>
                        </div>
                      
                        <div class="card-body w-100 py-3 text-center mr-auto ml-auto">
                            <?php
                            the_posts_pagination(array(
                                'mid_size'           => 500,
                                'prev_text'          => __('<i class="fas fa-long-arrow-alt-right"></i>', 'textdomain'),
                                'next_text'          => __('<i class="fas fa-long-arrow-alt-left"></i>', 'textdomain'),
                                'screen_reader_text' => __('&nbsp;'),
                            ));
                            ?>
                        </div>
                    </div>

                    <div class="card products w-100 lg-rounded mx-0 my-3">
                        <div class="card-title pr-3 bg-gray-100 pt-3 pb-2 border-dark rounded-top">
                            <h5 class="text-right d-flex text-primary align-item-center d-inline-block float-right">
                                <i class="fas fa-brain animated infinite tada text-danger pl-2 slow delay-0s"></i> بهترین آموزش های آنلاین  </h5>
                      
                    </div>
                        <div class="card-body col-sm-12 w-100 py-2" dir="rtl">
                            <div class="row">
                                <?php
                                $the_query = new WP_Query(array('post_type' => 'product', 'posts_per_page' => '3')); ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <article class="col-12 col-md-6 col-lg-4 mt-3 lg-rounded d-inline-block">
                                            <figure class="card shadow online_course rounded-top px-0 h-100">
                                                <header>
                                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('online-course-thumb'); ?> </a>
                                                </header>
                                                <header>
                                                        <a href="<?php the_permalink(); ?>"> <h5 class="card-title text-right pr-2 pt-3"> <?php the_title(); ?> </h5> </a>
                                                </header>
                                                <hr>
                                                <summary class="text-right w-100 pr-3 text-danger" style="min-height:20px">
                                                 <?php  echo $price = get_post_meta( get_the_ID(), '_regular_price', true) ?> تومان
                                                </summary>
                                                <summary class="card-text text-justify pr-3"> <?php echo wp_trim_words( get_the_content(), 17, '...' ); ?> </summary>
                                                <br> <br>
                                                <button class="btn btn-secondary border-bottom rounded-top-0 w-100">
                                                    اطلاعات بیشتر
                                                </button>
                                            </figure>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('متاسفانه محتوایی برای نمایش وجود ندارد.'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body  py-2">
                            <button class="btn btn-outline-danger btn-lg w-100"> بقیه دوره های آموزشی</button>
                        </div>
                    </div>
                    
                </div>
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>
</main>

<?php get_footer(); ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".slider_box").owlCarousel({
      'items': 1,
      'rtl': true,
    });
    $('#sidemobilev').sidr();
  });

</script>
