<?php

function clesarmedia_home_settings_register( $wp_customize ) {
   $wp_customize->add_section(
       'home_section',
       array(
           'title' => __( 'Home Settings', 'clesarmedia' ),
           'description' => __( 'This is the home settings for homepage.', 'clesarmedia' ),
           'priority' => 35,
       )
   );
   //settings popular posts
   $wp_customize->add_setting( 'popularposts_title', array( 'default' => 'Popular Posts', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'popularposts_title', array( 'label' => __('Popular Posts title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'popularposts_number', array( 'default' => '6', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'popularposts_number', array( 'label' => __('number of posts Popular posts', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   //settings Latest video
   $wp_customize->add_setting( 'latestvideo_title', array( 'default' => 'Latets Videos', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'latestvideo_title', array( 'label' => __('Latest Video title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'latestvideo_number', array( 'default' => '5', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'latestvideo_number', array( 'label' => __('number of posts Latest Video', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));



    /* Category N1 */
    $wp_customize->add_setting(
        'cat_1_name', array( 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
    $wp_customize->add_control(
        new clesarmedia_WP_Customize_Category_Control(
            $wp_customize,
            'cat_1_name',
            array(
                'label'    => 'Category N1',
                'settings' => 'cat_1_name',
                'section'  => 'home_section'
            )
        )
    );
   $wp_customize->add_setting( 'cat_1_title', array( 'default' => '', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'cat_1_title', array( 'label' => __('Category N1 title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'cat_1_number', array( 'default' => '6', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'cat_1_number', array( 'label' => __('number of posts category 1', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
    /* Category N2 */
    $wp_customize->add_setting(
        'cat_2_name', array( 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
    $wp_customize->add_control(
        new clesarmedia_WP_Customize_Category_Control(
            $wp_customize,
            'cat_2_name',
            array(
                'label'    => 'Category N2',
                'settings' => 'cat_2_name',
                'section'  => 'home_section'
            )
        )
    );
   $wp_customize->add_setting( 'cat_2_title', array( 'default' => '', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'cat_2_title', array( 'label' => __('Category N2 title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'cat_2_number', array( 'default' => '4', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'cat_2_number', array( 'label' => __('number of posts category 2', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
    /* Category N3 */
    $wp_customize->add_setting(
        'cat_3_name', array( 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
    $wp_customize->add_control(
        new clesarmedia_WP_Customize_Category_Control(
            $wp_customize,
            'cat_3_name',
            array(
                'label'    => 'Category N3',
                'settings' => 'cat_3_name',
                'section'  => 'home_section'
            )
        )
    );
   $wp_customize->add_setting( 'cat_3_title', array( 'default' => '', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'cat_3_title', array( 'label' => __('Category N3 title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'cat_3_number', array( 'default' => '4', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'cat_3_number', array( 'label' => __('number of posts category 3', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
    /* Category N4 */
    $wp_customize->add_setting(
        'cat_4_name', array( 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
    $wp_customize->add_control(
        new clesarmedia_WP_Customize_Category_Control(
            $wp_customize,
            'cat_4_name',
            array(
                'label'    => 'Category N4',
                'settings' => 'cat_4_name',
                'section'  => 'home_section'
            )
        )
    );
   $wp_customize->add_setting( 'cat_4_title', array( 'default' => '', 'sanitize_callback' => 'clesarmedia_sanitize_text' ));
   $wp_customize->add_control( 'cat_4_title', array( 'label' => __('Category N4 title', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'cat_4_number', array( 'default' => '6', 'sanitize_callback' => 'clesarmedia_sanitize_number' ));
   $wp_customize->add_control( 'cat_4_number', array( 'label' => __('number of posts category 4', 'clesarmedia'), 'section' => 'home_section', 'type' => 'text', ));
}
add_action( 'customize_register', 'clesarmedia_home_settings_register' );
/*****************************   Social settings for header and footer   ******************************/
function clesarmedia_social_settings_register( $wp_customize ) {
   $wp_customize->add_section(
       'social_section',
       array(
           'title' => 'Social Settings',
           'description' => __( 'This is the Social settings for all pages ( header and footer ).', 'clesarmedia' ),
           'priority' => 36,
       )
   );

    $wp_customize->add_setting( 'clesarmedia_rss', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_rss', array( 'label' => __('Rss Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_facebook', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_facebook', array( 'label' => __('facebook Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_google', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_google', array( 'label' => __('google plus Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_vk', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_vk', array( 'label' => __('vk Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_twitter', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_twitter', array( 'label' => __('twitter Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_instagram', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_instagram', array( 'label' => __('instagram Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_behance', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_behance', array( 'label' => __('behance Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_youtube', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_youtube', array( 'label' => __('youtube Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_dribbble', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_dribbble', array( 'label' => __('dribbble Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
   $wp_customize->add_setting( 'clesarmedia_pinterest', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw', 'transport'   => 'postMessage' ));
   $wp_customize->add_control( 'clesarmedia_pinterest', array( 'label' => __('pinterest Url', 'clesarmedia'), 'section' => 'social_section', 'type' => 'text', ));
}
add_action( 'customize_register', 'clesarmedia_social_settings_register' );
function clesarmedia_footer_text_register( $wp_customize ) {
	$wp_customize->add_section( 'coyright_footer' , array(
		'title' => __( 'Change Footer Text', 'clesarmedia' ),
	) );
    $wp_customize->add_setting(
        'copyright_textbox',
        array(
            'default' => '',
            'sanitize_callback' => 'clesarmedia_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'copyright_textbox',
        array(
            'label' => 'Copyright text',
            'section' => 'coyright_footer',
            'type' => 'text',
        )
    );
}
add_action( 'customize_register', 'clesarmedia_footer_text_register' );
function clesarmedia_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function clesarmedia_sanitize_number( $int ) {
    return absint( $int );
}
function clesarmedia_sanitize_file_url( $url ) {
	$output = '';
	$filetype = wp_check_filetype( $url );
	if ( $filetype["ext"] ) {
		$output = esc_url( $url );
	}
	return $output;
}
/***************************** end social settings ****************************************************/
?>