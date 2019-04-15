<?php get_header(); ?>
<main>
    <div class="row py-5" onclick="hide_main_list()">
        <div class="col-md-6 col-12">
            <div class="content text-center py-md-5 my-5">
                <h5 class=""> صفحه مورد نظر یافت نشد </h5>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-primary">  بازگشت به صفحه اصلی </a>
            </div>
        </div>
        <div class="col-md-6 col-12 text-right">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/download.gif" class="w-100" style="max-height: 400px; max-width: 360px" alt="">
        </div>
    </div>
</main>
