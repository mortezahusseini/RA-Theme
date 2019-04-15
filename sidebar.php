
<div class="col-md-3 col-12 pl-lg-0 px-4 mb-3 text-center">
    <div id="sidebar">
        <div class="row m-lg-0">
        <?php dynamic_sidebar( 'left_sidebar' ); ?>
        <div class="box card d-block shadow lg-rounded">
            <div class="row py-3 mx-0">
                <div class="col-9 d-flex align-items-center">
                    <h6 class="mb-0 d-inline-block text-small"> پربازدید ترین های این ماه </h6>
                </div>
                <div class="arrow float-left">
                    <div class="row">
                        <button class="btn bg-white slide_icon border-0" onclick="plusDivs(-1)"><i class="fas fa-chevron-right"></i></button></a>
                        <button class="btn bg-white slide_icon border-0" onclick="plusDivs(+1)"><i class="fas fa-chevron-left"></i></button></a>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="card-body px-3">
                <div class="mySlides">
                      
                   
                    <?php if (function_exists('get_most_viewed')): ?>
                      <?php echo get_most_viewed('both', 3); ?>
                      <?php endif; ?>
                 
                
                </div>
                <div class="mySlides">
                    <?php
                    $today = getdate();
                    $arms = array(
                        'post_type'=>'post','posts_per_page'=>'6','offset'=>3,
                        'meta_key'=>'views','orderby'=>'meta_value_num',
                        'order'=>'DESC','post_status'=>'publish',
                        'date_query'=> array(
                            array('column' =>'post_date_gmt','after' =>'1 month ago')));
                    $the_query = new WP_Query( $arms ); ?>
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="best d-flex align-items-center py-2">
                            <a href="<?php the_permalink(); ?>" class="w-100">
                                <div class="image float-right d-inline-block">
                                    <?php the_post_thumbnail('best-image-thumb'); ?>
                                </div>
                                <div class="text float-right pt-2 pr-2 text-small d-inline-block w-60 ">
                                    <?php echo limitWords(get_the_content() ,10); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; wp_reset_postdata(); else : ?>
                        <?php _e( 'متاسفم مطلبی برای نمایش وجود ندارد' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
