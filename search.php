<?php get_header(); ?>

<main class="py-sm-5 bg-gray-100" onclick="hide_main_list()">
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
                    <div class="card articles w-100 lg-rounded  my-3">
                        <div class="card-title bg-gray-200 pr-3 py-3 border-bottom border-dark align-items-center rounded-top">
                            <h5 class="text-right float-right"><i
                                    class="fas fa-microchip animated infinite swing slow delay-0s"></i> جدیدترین
                                مقالات آموزشی </h5>
                            <div class="material-switch float-left h-100 d-flex align-items-center pl-3" dir="ltr">
                                <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                                <label for="someSwitchOptionDefault" class="label-default"> </label> <span class="pb-2"> محبوب ترین ها </span>
                            </div>
                        </div>
                        <div class="px-4" id="filter">
                            <div class="row text-center">
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
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '12')); ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-sm-12 col-md-4 mt-4 lg-rounded">
                                            <div class="d-inline-block article card shadow lg-rounded px-0 text-center text-justify w-100 h-100">
                                                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('article-thumb'); ?> </a>
                                                <a href=""><h5
                                                        class="card-title text-right pr-2 pt-3"> <?php the_title(); ?> </h5>
                                                </a>
                                                <hr>
                                                <div class="card-text text-justify"> <?php the_content(); ?>  </div>
                                                <br><br>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('متاسفانه محتوایی برای نمایش وجود ندارد.'); ?></p>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="row py-3 text-center mr-auto ml-auto">
                            <?php
                            the_posts_pagination(array(
                                'mid_size'           => 127,
                                'prev_text'          => __('<i class="fas fa-long-arrow-alt-right"></i>', 'textdomain'),
                                'next_text'          => __('<i class="fas fa-long-arrow-alt-left"></i>', 'textdomain'),
                                'screen_reader_text' => __('&nbsp;'),
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="card products w-100 lg-rounded mx-0 my-3">
                        <div class="card-title pr-3 bg-gray-200 py-3 border-bottom border-dark rounded-top">
                            <h5 class="text-right"><i class="fas fa-brain animated infinite tada slow delay-0s"></i>
                                بهترین آموزش های آنلاین </h5>
                        </div>
                        <div class="card-body col-sm-12 w-100 py-2" dir="rtl">
                            <div class="row">
                                <?php
                                $the_query = new WP_Query(array('post_type' => 'product', 'posts_per_page' => '3')); ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-sm-12 d-inline-block mt-3 col-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="card shadow online_course rounded-top px-0 h-100">
                                                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('online-course-thumb'); ?> </a>
                                                <h5 class="card-title text-right pr-2 pt-3"> <?php the_title(); ?> </h5>
                                                <hr>
                                                <div class="text-right w-100 pr-3 text-danger">
                                                    <?php echo $product->get_price_html(); ?>
                                                </div>
                                                <div class="card-text text-justify"> <?php the_content(); ?>  </div>
                                                <button class="btn btn-secondary border-bottom rounded-top-0 w-100">
                                                    اطلاعات بیشتر
                                                </button>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('متاسفانه محتوایی برای نمایش وجود ندارد.'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body  py-2">
                            <button class="btn btn-outline-primary btn-lg w-100"> بقیه دوره های آموزشی</button>
                        </div>
                    </div>
                </div>

            </div>
            <?php  get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
