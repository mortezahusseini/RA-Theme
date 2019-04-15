<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes By Reza Kianoosh From IranThemes.com And Rkianoosh.ir.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $kianoosh_box = array(
    'id'          => 'reza_kianoosh_box',
    'title'       => __( 'تنظیمات محصول', 'iranthemes' ),
    'desc'        => 'برای نمایش قابلیتهای محصولات از زمینه های دلخواه این بخش استفاده کنید.',
    'pages'       => array( 'download' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
array(
        'label'       => __( 'پیش نمایش', 'iranthemes' ),
        'id'          => 'demolink1',
        'type'        => 'text',
        'desc'        => __( 'لینک پیش نمایش یا دمو را وارد کنید.', 'iranthemes' )
),
array(
        'label'       => __( 'حجم فایل دانلودی', 'iranthemes' ),
        'id'          => 'file_sizes',
        'type'        => 'text',
        'desc'        => __( 'حجم فایل دانلودی را وارد کنید.', 'iranthemes' )
),




));
/**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $kianoosh_box );
}