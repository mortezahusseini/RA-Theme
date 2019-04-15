<div class="col-md-3 col-12 pl-lg-0 px-4 text-center">
    <div id="sidebar">
        <article class="box d-inline-block lg-rounded w-100 shadow">
                <a href="<?php the_permalink();  ?>"><?php the_post_thumbnail('online-course-thumb'); ?></a>
        </article>

        <div class="box bg-white my-3 d-block lg-rounded shadow">
            <div class="card-title pt-2">
                <h5 class="text-primary"><i class="fa fa-info color-red animated infinite swing slow delay-0s pl-3"></i> مشخصات دوره  </h5>
            </div>
            <hr>
            <div class="card-body pt-0">
                <div class="price text-center">
                    <p >  قیمت : <span class="text-success">
                     <?php  echo $price = get_post_meta( get_the_ID(), '_regular_price', true) ?>
                        
                         تومان</span></p>
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
                            <i class="far fa-clock text-gray"></i>
                            زمان کل دوره
                            <span>  </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box bg-white mb-3 text-right py-3 lg-rounded shadow border">
            <h5 class="text-center"><i class="fas fa-heart color-red"></i> علاقه مندی ها : <span class="text-success"> 150 </span> </h5>
        </div>
        <div class="box bg-white mb-3 text-right py-3 lg-rounded shadow border">
            <h5 class="text-center"><i class="fas fa-graduation-cap text-success"></i> تعداد دانشجو : <span class="text-success"> 15015 </span> </h5>
        </div>
        <div class="box bg-white mb-3 text-right py-3 lg-rounded shadow border">
            <h5 class="text-center"><i class="fas fa-comment text-primary"></i> دیدگاه ها : <span class="text-success"> 
            
             <?php comments_number( ' 0 دیدگاه', '1 دیدگاه', '% دیدگاه' ); ?>
             </span> </h5>
        </div>
        <div class="teacher bg-white mb-3  text-center lg-rounded shadow border">
            <div class="position-relative text-center teacher-bg w-100">
                <img src="<?php echo get_template_directory_uri().'/assets/images/Robotic_border.jpg' ?>" style="height: 100px" class="w-100 h-10 rounded-top position-relative" alt="">
                <p class="text-danger" style="z-index: 100"> مدرس </p>
                <img src="<?php echo get_template_directory_uri().'/assets/images/download.png' ?>" class="position-absolute text-center teacher-photo" alt="">
            </div>
            <div class="card-body mt-3 text-right">
                <h5 class="text-primary"> علی حاجی محمدی </h5>
                <ul class="pr-3">
                    <li> فقط میدونم بچه خوبیه </li>
                    <li> خیلی پسر خوبیه </li>
                    <li> سلامم میرسونه </li>
                    <li> بینشسابشس </li>
                    <li>ش تینمل</li>
                </ul>
            </div>
        </div>
        <div class="box bg-white text-right py-3 lg-rounded shadow border">
            <div class="card-title">
                <h5 class="text-primary"><i class="fas fa-address-card color-red animated infinite swing slow delay-0s px-3"></i> مشاوره برای خرید دوره  </h5>
            </div>
            <hr />
            <div class="card-body pt-0">
                <p class="text-small text-justify">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرا
                </p>
            </div>
            <form action="" class="px-3" method="post">
                <label for="name" class="w-100"> نام و نام خانوادگی <span class="wppb-requerde text-danger"> * </span></label>
                <input type="text" name="name" class="form-control w-100 lg-rounded input-group-lg">
                <label for="phone" class="w-100 pt-2"> شماره موبایل <span class="wppb-requerde text-danger"> * </span></label>
                <input type="number" name="phone" class="form-control w-100 lg-rounded input-group-lg">
                <label for="email" class="w-100 pt-2"> ایمیل <span class="wppb-requerde text-danger"> * </span></label>
                <input type="text" name="email" class="form-control w-100 lg-rounded input-group-lg">
                <input type="submit" class="form-control btn btn-danger w-100 my-3 rounded" value="لطفا با من تماس بگیرید">
            </form>
        </div>
    </div>
</div>
