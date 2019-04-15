<div class="container-fluid bg-robot hidden-sm hidden-xs" style="height: 120px">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-xs-12 col-md-6 d-flex align-items-center text-white">
                <p class="bg-dark rounded bg-dark-transparent-50 text-large"> تاکنون ۵۶۴ نفر در ربات افزار ثبت نام کرده اند </p>
            </div>
            <div class="col-xs-12 col-md-6 d-flex align-items-center" dir="ltr">
                <a href="#"><button class="btn bg-transparent-50 btn-success"> شرکت در دوره های آنلاین <i class="fas fa-university"></i> </button> </a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container pt-5 pb-2" dir="rtl">
        <div class="col-xs-12">
            <div class="row hidden-xs hidden-sm">
                <div class="story_wishing col-12">
                    <div class="row">
                        <div class="col-2 align-items-end">
                            <a href="#"><?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?></a>
                        </div>
                        <div class="wish float-right col-10" dir="rtl">
                            <h5 class="text-primary text-right"> داستان یک آرزو </h5>
                            <p class="text-right text-medium"><?php ot_get_option("description") ?> </p>
                            <span class="text-danger float-right"> هادی رحمتی </span>
                            <br>
                            <span class="text-danger float-right"> مدیریت ربات افزار </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mx-0">
                <div class="main_footer pt-md-5 col-12">
                    <form action="" class="form-group col-lg-6 col-md-6 col-12 hidden-xs hidden-sm" method="post">
                        <div class="row d-flex justify-content-between">
                            <input type="text" class="form-control" style="width: 48%" placeholder="نام" required>
                            <input type="tel" class="form-control pr-2" style="width: 48%" placeholder="شماره تلفن" required>
                        </div>
                        <div class="row py-2 d-flex justify-content-between">
                            <input type="email" class="form-control w-100" placeholder="ایمیل" style="width: 80%" required>
                            <button class="btn btn-success float-left mt-2"> عضویت  <i class="fas fa-exclamation"></i></button>
                        </div>
                    </form>
                    <div class="row  hidden-sm hidden-xs text-right">
                        <div class="nav col-12 col-lg-8 pr-0 mainmenuarea text-small text-gray">
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                        </div>
                        <div class="col-12 col-lg-4 text-right commendation">
                            <h6 class="float-left w-100"> <div class="row">  <span class="text-primary pl-2"> توصیه روبات افزار: </span>  <a href="<?php echo get_option('robot_afzar_commendation_link'); ?>">
                                    <?php
                                    $commendation = get_option('robot_afzar_commendation');
                                    if (!empty($commendation)) { ?>
                                        <span> <?php  echo $commendation; ?> </span>
                                    <?php } else { ?>
                                        <p class=""> ربات اینستاگرام ستارگان اینستا</p>
                                    <?php } ?>
                                </a> 
                                </div> </h6>
                        </div>
                    </div>
                    <hr class="hidden-xs hidden-sm">
                    <div class="bottom_footer">
                        <div class="address col-12 col-md-8 float-right">
                            <p class="text-right text-medium text-gray">آدرس: تهران - عشرت آباد - میدان سپاه - خیابان خواجه نصیر طوسی - کوچه غزنوی پلاک 2 - طبقه دوم - واحد شرقی</p>
                            <p class="text-right text-medium text-gray"> تلفن : ۸۸۱۴۰۱۸۸-۰۲۱ </p>
                        </div>
                        <div class="social col-12 col-md-4 float-left pr-5">
                            <div class="row d-flex justify-content-between text-center">
                                <a href=""> <i class="fab fa-linkedin social-icon"></i> </a>
                                <a href=""><i class="fas fa-paper-plane social-icon text-gray"></i></a>
                                <a href=""><i class="fab fa-instagram social-icon text-gray"></i></a>
                                <a href=""><i class="fas fa-rss social-icon text-gray"></i></a>
                                <a href=""><i class="fab fa-google-plus-g social-icon text-gray"></i></a>
                                <a href=""><i class="fab fa-twitter social-icon text-gray"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
