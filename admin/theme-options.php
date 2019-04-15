<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

$saved_settings = get_option( 'option_tree_settings', array() );
$custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'همگانی'
      ),
      array(
        'id'          => 'header',
        'title'       => 'ناحیه بالای سایت'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'ناحیه پایین سایت'
      ),
      array(
        'id'          => 'social',
        'title'       => 'شبکه های اجتماعی'
      ),
        array(
            'id'          => 'slider',
            'title'       => 'اسلایدر'
        ),
),

'settings'        => array( 

// General
array(
    'id'          => 'favicon',
    'label'       => 'فاویکون',
    'desc'        => 'پیشنهاد می‌شود اندازه‌ی فاویکون 32px × 32px باشد.',
    'std'         => '',
    'type'        => 'upload',
    'section'     => 'header'
),
array(
    'id'          => 'logo',
    'label'       => 'لوگو',
    'desc'        => 'پیشنهاد می‌شود اندازه‌ی لوگو 290px × 90px باشد.',
    'std'         => '',
    'type'        => 'upload',
    'section'     => 'header'
),
array(
    'id'          => 'phone',
    'label'       => 'تلفن',
    'desc'        => 'تلفن تماس شرکت ربات افزار را وارد نمایید.',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'general'
),

array(
    'id'          => 'description',
    'label'       => 'متن داستان یک آرزو',
    'desc'        => 'متن کوتاه داستان یک آرزو در ناحیه پایین وب سایت را وارد نمایید',
    'std'         => '',
    'type'        => 'textarea',
    'section'     => 'footer'
),

array(
    'id'          => 'telegram',
    'label'       => 'لینک تلگرام',
    'desc'        => 'لینک تلگرام خود را وارد نمایید',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'social'
),

array(
    'id'          => 'instagram',
    'label'       => 'لینک اینستاگرام',
    'desc'        => 'لینک اینستاگرام خود را وارد نمایید',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'social'
),
array(
    'id'          => 'facebook',
    'label'       => 'لینک فیسبوک',
    'desc'        => 'لینک صفحه فیسبوک خود را وارد نمایید',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'social'
),
array(
    'id'          => 'linkedin',
    'label'       => 'لینکدین',
    'desc'        => 'لینک صفحه لینکداین را وارد نمایید',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'social'
),
array(
    'id'          => 'googleplus',
    'label'       => 'لینک گوگل پلاس',
    'desc'        => 'لینک صفحه گوگل پلاس وارد نمایید',
    'std'         => '',
    'type'        => 'text',
    'section'     => 'social'
),
    array(
        'id'          => 'first_slider_link',
        'label'       => 'لینک اسلایدر اول',
        'desc'        => 'لینک مربوطه را وارد نمایید',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'slider'
    ),
    array(
        'id'          => 'second_slider_link',
        'label'       => 'لینک اسلایدر دوم',
        'desc'        => 'لینک مربوطه را وارد نمایید',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'slider'
    ),
    array(
        'id'          => 'third_slider_link',
        'label'       => 'لینک اسلایدر سوم',
        'desc'        => 'لینک مربوطه را وارد نمایید',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'slider'
    ),
    array(
        'id'          => 'first_slider',
        'label'       => 'تصویر اسلایدر اول',
        'desc'        => 'تصویر مربوط به اسلایدر اول. توصیه میشد 9*16 باشد',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'slider'
    ),
    array(
        'id'          => 'second_slider',
        'label'       => 'تصویر اسلایدر دوم',
        'desc'        => 'تصویر مربوط به اسلایدر دوم. توصیه میشد 9*16 باشد',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'slider'
    ),
    array(
        'id'          => 'third_slider',
        'label'       => 'تصویر اسلایدر سوم',
        'desc'        => 'تصویر مربوط به اسلایدر سوم. توصیه میشد 9*16 باشد',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'slider'
    ),

));
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
}
