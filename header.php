<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
        elseif (is_single() ) { single_post_title(); }
        elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }
        else { wp_title('',true); } ?></title>
    <?php wp_head(); ?>
</head>
<body dir="rtl" onscroll="fixed_top()" <?php body_class(); ?>>

<button onclick="topFunction()" id="gotoTop" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
<header>
    <div class="container hidden-lg hidden-md hidden-xl mx-0 px-0 my-4">
        <div class="row mx-0">
            <div class="col-3 text-right">
                <button class="border-0 bg-white" onclick="show_main_list()" > <i class="fas fa-align-justify"></i> </button>
            </div>
            <div class="col-10 navbar text-center px-0 py-0 fixed-top h-100 bg-white" id="main_list">
                <div class="">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="show text-right"><li class="list-group-item rounded-0 border-bottom">
                            <?php
                            $logo = ot_get_option('logo');
                            if (!empty($logo)) { ?>
                                <img src="<?php echo $logo ?>" class="logo" title="logo" alt="لوگو">
                            <?php } else { ?>
                                <p>لطفا از طریق پنل تنظیمات تصویر لوگو را انتخاب کنید</p>
                            <?php } ?>
                        </li></a>
                </div>
                <nav class="mobile_menu text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>
            </div>
            <div class="col-9 text-left" onclick="hide_main_list()">
                <div class="row m-0" dir="ltr">
                    <div class="search d-inline-block d-flex align-items-center mx-3" id="search_icon" onclick="show_search_box()">
                        <a href="#"> <i class="fas fa-search color-red animated infinite slow tada delay-s"></i> </a>
                    </div>
                    <div class="user d-inline-block mx-1" id="user_icon">
                        <form id="login" class="ajax-auth w-100" action="login" method="post">
                            <div class="row mx-0 w-100 position-relative mx-auto shadow bg-white pb-0 p-4 lg-rounded">
                                <div class="col-12 position-relative text-right">
                                    <h3 class="text-center"> ورود </h3>
                                    <p class="status alert alert-danger py-2 text-small"></p>
                                    <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>
                                    <label for="username"class="text-right text-small">  نام کاربری یا ایمیل <span class="wppb-requerde text-danger"> * </span></label>
                                    <input id="username" type="text" class="required form-control" name="username">
                                    <label for="password" class="text-small"> رمز عبور <span class="wppb-requerde text-danger"> * </span></label>
                                    <input id="password" type="password" class="required form-control" name="password">
                                    <a class="text-link text-right text-small text-gray d-block my-2 w-100" href="<?php
                                    echo wp_lostpassword_url(); ?>">رمزتان را فراموش کرده اید؟</a>
                                    <div class="w-100 text-center">
                                        <input class="submit_button btn btn-danger btn-lg lg-rounded mt-3 mx-auto" type="submit" value="ورود">
                                    </div>

                                    <h3 class="text-right mt-3 text-small d-block w-100"> ثبت نام نکرده اید؟ <a id="pop_signup" class="text-danger" href=""> حساب کاربری بسازید </a></h3>
                                </div>
                                <a class="close" href=""> <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-hidden="true">X</button> </a>
                            </div>
                        </form>

                        <form id="register" class="ajax-auth w-100"  action="register" method="post">
                            <div class="row mx-0 w-100 position-relative mx-auto shadow bg-white pb-0 p-4 lg-rounded">
                                <div class="col-12 text-right">
                                    <h3 class="text-center"> ثبت نام </h3>
                                    <p class="status text-danger py-2 text-small"></p>
                                    <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>
                                    <label for="signonname" class="text-right text-small"> نام کاربری <span class="wppb-requerde text-danger"> * </span></label>
                                    <input id="signonname" type="text" name="signonname" class="required form-control w-100">
                                    <label for="email" class="text-right text-small">ایمیل<span class="wppb-requerde text-danger"> * </span></label>
                                    <input id="email" type="text" class="required email form-control w-100" name="email">
                                    <label for="signonpassword" class="text-right text-small"> رمز ورود <span class="wppb-requerde text-danger"> * </span></label>
                                    <input id="signonpassword" type="password" class="required form-control w-100" name="signonpassword" >
                                    <label for="password2" class="text-right text-small">تکرار رمز عبور<span class="wppb-requerde text-danger"> * </span></label>
                                    <input type="password" id="password2" class="required form-control w-100" name="password2">
                                    <div class="w-100 text-center pt-3">
                                        <input class="submit_button btn btn-danger btn-lg lg-rounded mt-3" type="submit" value="ثبت نام">
                                    </div>
                                    <h3 class="text-link text-right text-small d-block my-2 w-100"> قبلا ثبت نام کرده اید؟ <a id="pop_login" class="text-danger" href=""> واردشوید </a></h3>
                                </div>
                                <a class="close" href=""><button type="button" class="btn btn-outline-danger float-left" data-dismiss="modal" aria-hidden="true">X</button> </a>
                            </div>
                        </form>
                        <form action="" class="form-group form-inline mr-auto my-0 d-flex align-items-center">
                            <?php if (is_user_logged_in()) { ?>
                                <a class="btn btn-danger px-3" href="<?php echo wp_logout_url( home_url() ); ?>"> خروج </a>
                            <?php } else { get_template_part('ajax', 'auth'); ?>
                                <a class="login_button btn btn-danger px-3" id="show_signup" href=""> ثبت نام </a>
                                <a class="login_button px-3" id="show_login" href=""> ورود <i class="fas fa-angle-down mr-1"></i> </a>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
            <form action="" class="inline w-100 bg-white align-items-center fixed-top py-3 shadow border-bottom" style="display: none" id="search_box">
                <input type="text" class="w-75 form-control float-right mr-2" placeholder="نام مقاله خود را وارد کنید">
                <a href="#" class=" px-2"> <i class="fas fa-search pt-2 color-red animated infinite slow tada delay-s" style="font-size: 23px;" ></i> </a>
                <a href="#" onclick="hide_search_box()" class=" px-2"> <i class="fas pt-2 fa-times color-red animated infinite slow tada delay-s" style="font-size: 25px;" ></i> </a>
            </form>
        </div>
    </div>
    <div class="container text-center hidden-sm hidden-xs">
        <div class="row mr-lg-0">
            <div class="w-100 d-flex justify-content-between">
                <div class="text-right col-xs-12 col-6 align-items-center pr-0">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php
                        $logo = ot_get_option('logo');
                        if (!empty($logo)) { ?>
                            <img src="<?php echo $logo ?>" class="logo" title="logo" alt="لوگو">
                        <?php } else { ?>
                            <p>لطفا از طریق پنل تنظیمات تصویر لوگو را انتخاب کنید</p>
                        <?php } ?>
                    </a>
                </div>
                <div class="col-xs-12 col-6 pl-0 search d-flex align-items-center">
                    <div class="contact d-flex align-items-center">
                        <a href="#" class="text-dark text-center p-3">
                            <?php
                            $number = ot_get_option('phone');
                            if (!empty($logo)) { ?>
                                <span> <?php  echo $number; ?> </span>
                            <?php } else { ?>
                                <p>لطفا از طریق پنل تنظیمات شماره تماس خود را وارد نمایید</p>
                            <?php } ?><i class="fas fa-flip-horizontal fa-phone hvr-buzz Out color-red"></i> </a>
                        <a href="#" class="text-dark text-center pl-2"> <i class="fas fa-shopping-cart color-red"></i> </a>
                    </div>
                    <?php  get_search_form() ?>
                </div>
            </div>
            <hr class="w-100 mb-0">
            <div class="w-100 text-center bg-white" id="fixed_top">
                <div class="d-none text-center w-100 d-flex align-items-center py-3" id="add_container">
                    <nav class="col-lg-7 px-0" id="scroll_col9">
                        <div class="d-flex align-items-center mainmenuarea">
                            <li class=" d-none" id="logo_scroll">
                                <a href="#">
                                    <?php
                                    $logo = ot_get_option('logo');
                                    if (!empty($logo)) { ?>
                                        <img src="<?php echo $logo ?>" class="logo" title="logo" alt="لوگو">
                                    <?php } else { ?>
                                        <p>لطفا از طریق پنل تنظیمات تصویر لوگو را انتخاب کنید</p>
                                    <?php } ?>
                                </a>
                            </li>
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        </div>
                    </nav>
                    <form id="login" class="ajax-auth w-100" action="login" method="post">
                        <div class="row mx-0 w-50 position-relative mx-auto shadow bg-white pb-0 p-4 lg-rounded">
                            <div class="col-6 position-relative text-right">
                                <h3 class="text-center"> ورود </h3>
                                <p class="status alert alert-danger text-small my-2"></p>
                                <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>
                                <label for="username"class="text-right text-small">  نام کاربری یا ایمیل <span class="wppb-requerde text-danger"> * </span></label>
                                <input id="username" type="text" class="required form-control" name="username">
                                <label for="password" class="text-small"> رمز عبور <span class="wppb-requerde text-danger"> * </span></label>
                                <input id="password" type="password" class="required form-control" name="password">
                                <a class="text-link text-right text-small text-gray d-block my-2 w-100" href="<?php
                                echo wp_lostpassword_url(); ?>">رمزتان را فراموش کرده اید؟</a>
                                <div class="w-100 text-center">
                                    <input class="submit_button btn btn-danger btn-lg lg-rounded mt-3 mx-auto" type="submit" value="ورود">
                                </div>

                                <h3 class="text-right mt-3 text-small d-block w-100"> ثبت نام نکرده اید؟ <a id="pop_signup" class="text-danger" href=""> حساب کاربری بسازید </a></h3>
                            </div>
                            <div class="col-6 login-photo position-relative">
                                <img class="w-100 lg-rounded" src="<?php echo get_template_directory_uri().'/assets/images/login-modal-bg.jpg' ?>" alt="ربات افزار">
                            </div>
                            <a class="close" href=""> <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-hidden="true">X</button> </a>
                        </div>
                    </form>

                    <form id="register" class="ajax-auth w-100"  action="register" method="post">
                        <div class="row mx-0 w-50 position-relative mx-auto shadow bg-white pb-0 p-4 lg-rounded">
                            <div class="col-6 text-right">
                                <h3 class="text-center"> ثبت نام </h3>
                                <p class="status alert alert-danger my-2 text-small"></p>
                                <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>
                                <label for="signonname" class="text-right text-small"> نام کاربری <span class="wppb-requerde text-danger"> * </span></label>
                                <input id="signonname" type="text" name="signonname" class="required form-control w-100">
                                <label for="email" class="text-right text-small">ایمیل<span class="wppb-requerde text-danger"> * </span></label>
                                <input id="email" type="text" class="required email form-control w-100" name="email">
                                <label for="signonpassword" class="text-right text-small"> رمز ورود <span class="wppb-requerde text-danger"> * </span></label>
                                <input id="signonpassword" type="password" class="required form-control w-100" name="signonpassword" >
                                <label for="password2" class="text-right text-small">تکرار رمز عبور<span class="wppb-requerde text-danger"> * </span></label>
                                <input type="password" id="password2" class="required form-control w-100" name="password2">
                                <div class="w-100 text-center pt-3">
                                    <input class="submit_button btn btn-danger btn-lg lg-rounded mt-3" type="submit" value="ثبت نام">
                                </div>
                                <h3 class="text-link text-right text-small d-block my-2 w-100"> قبلا ثبت نام کرده اید؟ <a id="pop_login" class="text-danger" href=""> واردشوید </a></h3></div>
                            <div class="col-6">
                                <img class="w-100 lg-rounded" src="<?php echo get_template_directory_uri().'/assets/images/login-modal-bg.jpg' ?>" alt="ربات افزار">
                            </div>
                            <a class="close" href=""><button type="button" class="btn btn-outline-danger float-left" data-dismiss="modal" aria-hidden="true">X</button> </a>
                        </div>
                    </form>
                    <form action="" class="form-group form-inline mr-auto my-0 d-flex align-items-center">
                        <?php if (is_user_logged_in()) { ?>
                            <a class="btn btn-danger px-3" href="<?php echo wp_logout_url( home_url() ); ?>"> خروج </a>
                        <?php } else { get_template_part('ajax', 'auth'); ?>
                            <a class="login_button btn btn-danger px-3" id="show_signup" href=""> ثبت نام </a>
                            <a class="login_button px-3" id="show_login" href=""> ورود <i class="fas fa-angle-down mr-1"></i> </a>
                        <?php } ?>
                    </form>
                </div>

            </div>
        </div>
    </div>

</header>
