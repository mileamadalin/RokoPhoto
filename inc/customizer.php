<?php

function rokophoto_customize_register($wp_customize)

{

    $wp_customize->add_panel('rokophoto_slider_section', array(

        'priority'       => 65,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: Slider', 'rokophoto'),

        'description'    => __('This section allows you to customize the slider that appears on the front-page of your site.', 'rokophoto'),
    ));


    $wp_customize->add_panel('rokophoto_vision_section', array(

        'priority'       => 66,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: Vision', 'rokophoto'),

        'description'    => __('This section allows you to customize the vision section that appears on the front-page of your site.', 'rokophoto'),
    ));


    $wp_customize->add_panel('rokophoto_portfolio_section', array(

        'priority'       => 67,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: Portfolio', 'rokophoto'),

        'description'    => __('This section allows you to customize the portfolio section that appears on the front-page of your site.', 'rokophoto'),
    ));


    $wp_customize->add_panel('rokophoto_ribbon_section', array(

        'priority'       => 68,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: Ribbon', 'rokophoto'),

        'description'    => __('This section allows you to customize the ribbon section that appears on the front-page of your site.', 'rokophoto'),
    ));


    $wp_customize->add_panel('rokophoto_about_section', array(

        'priority'       => 69,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: About', 'rokophoto'),

        'description'    => __('This section allows you to customize the about section that appears on the front-page of your site.', 'rokophoto'),
    ));


    $wp_customize->add_panel('rokophoto_contact_section', array(

        'priority'       => 70,

        'capability'     => 'edit_theme_options',

        'title'          => __('Frontpage: Contact', 'rokophoto'),

        'description'    => __('This section allows you to customize the contact section that appears on the front-page of your site.', 'rokophoto'),
    ));
	
	
    $wp_customize->add_section('rokophoto_logo_section', array(

        'priority' => 25,

        'title' => __('Site Logo', 'rokophoto'),

    ));

    

    $wp_customize->add_section('rokophoto_subhead_section', array(

        'priority' => 60,

        'title' => __('Sub-Header', 'rokophoto'),

    ));



    $wp_customize->add_section('rokophoto_footer_section', array(

        'priority' => 80,

        'title' => __('Footer', 'rokophoto'),

    ));
	
    $wp_customize->add_section('rokophoto_slider_settings', array(

        'priority' => 5,

        'title' => __('Slider Settings', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_slider_one', array(

        'priority' => 10,

        'title' => __('Slide One', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_slider_two', array(

        'priority' => 15,

        'title' => __('Slide Two', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_slider_three', array(

        'priority' => 20,

        'title' => __('Slide Three', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_slider_four', array(

        'priority' => 25,

        'title' => __('Slide Four', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_slider_five', array(

        'priority' => 30,

        'title' => __('Slide Five', 'rokophoto'),

        'panel'  => 'rokophoto_slider_section',
    ));
	
    $wp_customize->add_section('rokophoto_vision_settings', array(

        'priority' => 5,

        'title' => __('Vision Settings', 'rokophoto'),

        'panel'  => 'rokophoto_vision_section',
    ));
	
    $wp_customize->add_section('rokophoto_vision_one', array(

        'priority' => 10,

        'title' => __('Vision One', 'rokophoto'),

        'panel'  => 'rokophoto_vision_section',
    ));
	
    $wp_customize->add_section('rokophoto_vision_two', array(

        'priority' => 15,

        'title' => __('Vision Two', 'rokophoto'),

        'panel'  => 'rokophoto_vision_section',
    ));
	
    $wp_customize->add_section('rokophoto_vision_three', array(

        'priority' => 20,

        'title' => __('Vision Three', 'rokophoto'),

        'panel'  => 'rokophoto_vision_section',
    ));
	
    $wp_customize->add_section('rokophoto_portfolio_settings', array(

        'priority' => 5,

        'title' => __('Portfolio Settings', 'rokophoto'),

        'panel'  => 'rokophoto_portfolio_section',
    ));
	
    $wp_customize->add_section('rokophoto_ribbon_settings', array(

        'priority' => 5,

        'title' => __('Ribbon Settings', 'rokophoto'),

        'panel'  => 'rokophoto_ribbon_section',
    ));
	
    $wp_customize->add_section('rokophoto_ribbon_content', array(

        'priority' => 10,

        'title' => __('Ribbon Content', 'rokophoto'),

        'panel'  => 'rokophoto_ribbon_section',
    ));
	
    $wp_customize->add_section('rokophoto_about_settings', array(

        'priority' => 5,

        'title' => __('About Settings', 'rokophoto'),

        'panel'  => 'rokophoto_about_section',
    ));
	
    $wp_customize->add_section('rokophoto_about_content', array(

        'priority' => 10,

        'title' => __('About Content', 'rokophoto'),

        'panel'  => 'rokophoto_about_section',
    ));
	
    $wp_customize->add_section('rokophoto_contact_settings', array(

        'priority' => 5,

        'title' => __('Contact Settings', 'rokophoto'),

        'panel'  => 'rokophoto_contact_section',
    ));
	
    $wp_customize->add_section('rokophoto_contact_details', array(

        'priority' => 10,

        'title' => __('Contact Details', 'rokophoto'),

        'panel'  => 'rokophoto_contact_section',
    ));

    $wp_customize->add_setting('rokophoto_logo_image', array(

        'default' => get_template_directory_uri().'/img/logo.png',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_logo_image', array(

        'label' => __('Site Logo Image', 'rokophoto'),

        'section' => 'rokophoto_logo_section',

        'priority' => 5,

        'settings' => 'rokophoto_logo_image'

    )));



    $wp_customize->add_setting('rokophoto_subhead_title', array(

        'default' => __('Welcome to', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_subhead_title', array(

        'label' => __('Sub-Header Title', 'rokophoto'),

        'section' => 'rokophoto_subhead_section',

        'priority' => 5,

        'settings' => 'rokophoto_subhead_title'

    ));



    $wp_customize->add_setting('rokophoto_social_label', array(

        'default' => __('To get the latest update of me and my works', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_social_label', array(

        'label' => __('Social Box Label', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 5,

        'settings' => 'rokophoto_social_label'

    ));



    $wp_customize->add_setting('rokophoto_social_text', array(

        'default' => __('Follow Me', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_social_text', array(

        'label' => __('Social Box Text', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 10,

        'settings' => 'rokophoto_social_text'

    ));



    $wp_customize->add_setting('rokophoto_facebook_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_facebook_link', array(

        'label' => __('Facebook URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 15,

        'settings' => 'rokophoto_facebook_link'

    ));

    

    $wp_customize->add_setting('rokophoto_twitter_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_twitter_link', array(

        'label' => __('Twitter URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 20,

        'settings' => 'rokophoto_twitter_link'

    ));

    

    $wp_customize->add_setting('rokophoto_behance_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_behance_link', array(

        'label' => __('Behance URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 25,

        'settings' => 'rokophoto_behance_link'

    ));

    

    $wp_customize->add_setting('rokophoto_dribbble_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_dribbble_link', array(

        'label' => __('Dribbble URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 30,

        'settings' => 'rokophoto_dribbble_link'

    ));

    

    $wp_customize->add_setting('rokophoto_flickr_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_flickr_link', array(

        'label' => __('Flickr URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 35,

        'settings' => 'rokophoto_flickr_link'

    ));

    

    $wp_customize->add_setting('rokophoto_googleplus_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_googleplus_link', array(

        'label' => __('Google + URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 40,

        'settings' => 'rokophoto_googleplus_link'

    ));

    

    $wp_customize->add_setting('rokophoto_instagram_link', array(

        'default' => '#',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_instagram_link', array(

        'label' => __('Instagram URL', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 45,

        'settings' => 'rokophoto_instagram_link'

    ));



    $wp_customize->add_setting('rokophoto_footer_copyrights', array(

        'default' => __('Awesome Photography. All Rights Reserved', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_footer_copyrights', array(

        'label' => __('Footer Copyrights', 'rokophoto'),

        'section' => 'rokophoto_footer_section',

        'priority' => 50,

        'settings' => 'rokophoto_footer_copyrights'

    ));
	
	
	$wp_customize->add_setting( 'rokophoto_slider_display_settings');

	
	$wp_customize->add_control('rokophoto_slider_display_settings',array(

		'type' => 'checkbox',
		
		'label' => __('Disable Slider','rokophoto'),
		
		'section' => 'rokophoto_slider_settings',
		
		'priority' => 5,
	));



    $wp_customize->add_setting('rokophoto_slider_one_image', array(

        'default' => get_template_directory_uri().'/img/setup/01_bg.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_slider_one_image', array(

        'label' => __('Slide Image', 'rokophoto'),

        'section' => 'rokophoto_slider_one',

        'priority' => 5,

        'settings' => 'rokophoto_slider_one_image'

    )));

	
    $wp_customize->add_setting('rokophoto_slider_one_text', array(

        'default' => __('Slide One', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_slider_one_text', array(

        'label' => __('Slide Text', 'rokophoto'),

        'section' => 'rokophoto_slider_one',

        'priority' => 10,

        'settings' => 'rokophoto_slider_one_text'

    ));


    $wp_customize->add_setting('rokophoto_slider_two_image', array(

        'default' => get_template_directory_uri().'/img/setup/02_bg.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_slider_two_image', array(

        'label' => __('Slide Image', 'rokophoto'),

        'section' => 'rokophoto_slider_two',

        'priority' => 5,

        'settings' => 'rokophoto_slider_two_image'

    )));

	
    $wp_customize->add_setting('rokophoto_slider_two_text', array(

        'default' => __('Slide Two', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_slider_two_text', array(

        'label' => __('Slide Text', 'rokophoto'),

        'section' => 'rokophoto_slider_two',

        'priority' => 10,

        'settings' => 'rokophoto_slider_two_text'

    ));

	
    $wp_customize->add_setting('rokophoto_slider_three_image', array(

        'default' => get_template_directory_uri().'/img/setup/03_bg.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_slider_three_image', array(

        'label' => __('Slide Image', 'rokophoto'),

        'section' => 'rokophoto_slider_three',

        'priority' => 5,

        'settings' => 'rokophoto_slider_three_image'

    )));

	
    $wp_customize->add_setting('rokophoto_slider_three_text', array(

        'default' => __('Slide Three', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_slider_three_text', array(

        'label' => __('Slide Text', 'rokophoto'),

        'section' => 'rokophoto_slider_three',

        'priority' => 10,

        'settings' => 'rokophoto_slider_three_text'

    ));
	

    $wp_customize->add_setting('rokophoto_slider_four_image', array(

        'default' => get_template_directory_uri().'/img/setup/04_bg.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_slider_four_image', array(

        'label' => __('Slide Image', 'rokophoto'),

        'section' => 'rokophoto_slider_four',

        'priority' => 5,

        'settings' => 'rokophoto_slider_four_image'

    )));

	
    $wp_customize->add_setting('rokophoto_slider_four_text', array(

        'default' => __('Slide Four', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_slider_four_text', array(

        'label' => __('Slide Text', 'rokophoto'),

        'section' => 'rokophoto_slider_four',

        'priority' => 10,

        'settings' => 'rokophoto_slider_four_text'

    ));
	
	
    $wp_customize->add_setting('rokophoto_slider_five_image', array(

        'default' => get_template_directory_uri().'/img/setup/05_bg.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_slider_five_image', array(

        'label' => __('Slide Image', 'rokophoto'),

        'section' => 'rokophoto_slider_five',

        'priority' => 5,

        'settings' => 'rokophoto_slider_five_image'

    )));


    $wp_customize->add_setting('rokophoto_slider_five_text', array(

        'default' => __('Slide Five', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_slider_five_text', array(

        'label' => __('Slide Text', 'rokophoto'),

        'section' => 'rokophoto_slider_five',

        'priority' => 10,

        'settings' => 'rokophoto_slider_five_text'

    ));
	
	
	$wp_customize->add_setting( 'rokophoto_vision_display_settings');

	
	$wp_customize->add_control('rokophoto_vision_display_settings',array(

		'type' => 'checkbox',
		
		'label' => __('Disable Vision','rokophoto'),
		
		'section' => 'rokophoto_vision_settings',
		
		'priority' => 5,
	));
	
	
	
    $wp_customize->add_setting('rokophoto_vision_image', array(

        'default' => get_template_directory_uri() . '/img/01_services.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw',

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_vision_image', array(

        'label' => __('Vision Background Image', 'rokophoto'),

        'section' => 'rokophoto_vision_settings',

        'priority' => 10,

        'settings' => 'rokophoto_vision_image'

    )));
	
	
	$wp_customize->add_setting( 'rokophoto_vision_one_text_display');

	
	$wp_customize->add_control('rokophoto_vision_one_text_display',array(

		'type' => 'checkbox',
		
		'label' => __('Disable First Slide','rokophoto'),
		
		'section' => 'rokophoto_vision_one',
		
		'priority' => 5,
	));


    $wp_customize->add_setting('rokophoto_vision_one_text_one', array(

        'default' => __('Design To Showcase', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_one_text_one', array(

        'label' => __('First Line', 'rokophoto'),

        'section' => 'rokophoto_vision_one',

        'priority' => 10,

        'settings' => 'rokophoto_vision_one_text_one'

    ));


    $wp_customize->add_setting('rokophoto_vision_one_text_two', array(

        'default' => __('Photography', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_one_text_two', array(

        'label' => __('Second Line', 'rokophoto'),

        'section' => 'rokophoto_vision_one',

        'priority' => 15,

        'settings' => 'rokophoto_vision_one_text_two'

    ));


    $wp_customize->add_setting('rokophoto_vision_one_text_three', array(

        'default' => __('The need to capture the moment and freeze it for life.', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_one_text_three', array(

        'label' => __('Third Line', 'rokophoto'),

        'section' => 'rokophoto_vision_one',

        'priority' => 20,

        'settings' => 'rokophoto_vision_one_text_three'

    ));
	
	
   $wp_customize->add_setting( 'rokophoto_vision_two_text_display');

	
   $wp_customize->add_control('rokophoto_vision_two_text_display',array(

       'type' => 'checkbox',

       'label' => __('Disable Second Slide','rokophoto'),

       'section' => 'rokophoto_vision_two',

       'priority' => 5,
     ));


    $wp_customize->add_setting('rokophoto_vision_two_text_one', array(

        'default' => __('Capture The Moment', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_two_text_one', array(

        'label' => __('First Line', 'rokophoto'),

        'section' => 'rokophoto_vision_two',

        'priority' => 10,

        'settings' => 'rokophoto_vision_two_text_one'

    ));


    $wp_customize->add_setting('rokophoto_vision_two_text_two', array(

        'default' => __('Photography', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_two_text_two', array(

        'label' => __('Second Line', 'rokophoto'),

        'section' => 'rokophoto_vision_two',

        'priority' => 15,

        'settings' => 'rokophoto_vision_two_text_two'

    ));


    $wp_customize->add_setting('rokophoto_vision_two_text_three', array(

        'default' => __('Quality photography that preserves treasured memories.', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_two_text_three', array(

        'label' => __('Third Line', 'rokophoto'),

        'section' => 'rokophoto_vision_two',

        'priority' => 20,

        'settings' => 'rokophoto_vision_two_text_three'

    ));
	
	
   $wp_customize->add_setting( 'rokophoto_vision_three_text_display');

	
   $wp_customize->add_control('rokophoto_vision_three_text_display',array(

       'type' => 'checkbox',

       'label' => __('Disable Third Slide','rokophoto'),

       'section' => 'rokophoto_vision_three',

       'priority' => 5,
     ));


    $wp_customize->add_setting('rokophoto_vision_three_text_one', array(

        'default' => __('Still-life Images', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_three_text_one', array(

        'label' => __('First Line', 'rokophoto'),

        'section' => 'rokophoto_vision_three',

        'priority' => 10,

        'settings' => 'rokophoto_vision_three_text_one'

    ));


    $wp_customize->add_setting('rokophoto_vision_three_text_two', array(

        'default' => __('Photography', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_three_text_two', array(

        'label' => __('Second Line', 'rokophoto'),

        'section' => 'rokophoto_vision_three',

        'priority' => 15,

        'settings' => 'rokophoto_vision_three_text_two'

    ));


    $wp_customize->add_setting('rokophoto_vision_three_text_three', array(

        'default' => __('Take alot of photos not war.', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_vision_three_text_three', array(

        'label' => __('Third Line', 'rokophoto'),

        'section' => 'rokophoto_vision_three',

        'priority' => 20,

        'settings' => 'rokophoto_vision_three_text_three'

    ));
	
	
   $wp_customize->add_setting( 'rokophoto_portfolio_display_settings');

	
   $wp_customize->add_control('rokophoto_portfolio_display_settings',array(

       'type' => 'checkbox',

       'label' => __('Disable Portfolio','rokophoto'),

       'section' => 'rokophoto_portfolio_settings',

       'priority' => 5,
     ));


    $wp_customize->add_setting('rokophoto_portfolio_heading', array(

        'default' => __('Portfolio', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_portfolio_heading', array(

        'label' => __('Section Heading', 'rokophoto'),

        'section' => 'rokophoto_portfolio_settings',

        'priority' => 10,

        'settings' => 'rokophoto_portfolio_heading'

    ));


    $wp_customize->add_setting('rokophoto_portfolio_subheading', array(

        'default' => __('Recent pictures I have taken. Check them out!', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_portfolio_subheading', array(

        'label' => __('Section Sub-heading', 'rokophoto'),

        'section' => 'rokophoto_portfolio_settings',

        'priority' => 15,

        'settings' => 'rokophoto_portfolio_subheading'

    ));


    $wp_customize->add_setting('rokophoto_portfolio_count', array(

        'default' => 9,

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_portfolio_count', array(

        'label' => __('Item Count', 'rokophoto'),

        'section' => 'rokophoto_portfolio_settings',

        'priority' => 20,

        'settings' => 'rokophoto_portfolio_count'

    ));
	
	
   $wp_customize->add_setting( 'rokophoto_ribbon_display_settings');

	
   $wp_customize->add_control('rokophoto_ribbon_display_settings',array(

       'type' => 'checkbox',

       'label' => __('Disable Ribbon','rokophoto'),

       'section' => 'rokophoto_ribbon_settings',

       'priority' => 5,

     ));


    $wp_customize->add_setting('rokophoto_ribbon_text', array(

        'default' => __('Want to talk? You can contact by me clicking on...', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_ribbon_text', array(

        'label' => __('Text', 'rokophoto'),

        'section' => 'rokophoto_ribbon_content',

        'priority' => 10,

        'settings' => 'rokophoto_ribbon_text'

    ));


    $wp_customize->add_setting('rokophoto_ribbon_button', array(

        'default' => __('CONTACT', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_ribbon_button', array(

        'label' => __('Button Text', 'rokophoto'),

        'section' => 'rokophoto_ribbon_content',

        'priority' => 15,

        'settings' => 'rokophoto_ribbon_button'

    ));


    $wp_customize->add_setting('rokophoto_ribbon_button_link', array(

        'default' => '#footer',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url_raw'

    ));



    $wp_customize->add_control('rokophoto_ribbon_button_link', array(

        'label' => __('Button Link', 'rokophoto'),

        'section' => 'rokophoto_ribbon_content',

        'priority' => 20,

        'settings' => 'rokophoto_ribbon_button_link'

    ));
	
	
	$wp_customize->add_setting( 'rokophoto_about_display_settings');

	
	$wp_customize->add_control('rokophoto_about_display_settings',array(

		'type' => 'checkbox',
		
		'label' => __('Disable About','rokophoto'),
		
		'section' => 'rokophoto_about_settings',
		
		'priority' => 5,
	));



    $wp_customize->add_setting('rokophoto_about_image', array(

        'default' => get_template_directory_uri().'/img/02_about.jpg',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_url',

    ));



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_about_image', array(

        'label' => __('Background Image', 'rokophoto'),

        'section' => 'rokophoto_about_settings',

        'priority' => 10,

        'settings' => 'rokophoto_about_image'

    )));


    $wp_customize->add_setting('rokophoto_about_name', array(

        'default' => __('Hello Kitty', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_about_name', array(

        'label' => __('Name', 'rokophoto'),

        'section' => 'rokophoto_about_content',

        'priority' => 5,

        'settings' => 'rokophoto_about_name'

    ));


    $wp_customize->add_setting('rokophoto_about_address', array(

        'default' => __('Planet Earth, Milky-way', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_about_address', array(

        'label' => __('Address', 'rokophoto'),

        'section' => 'rokophoto_about_content',

        'priority' => 10,

        'settings' => 'rokophoto_about_address'

    ));



    $wp_customize->add_setting('rokophoto_about_website', array(

        'default' => __('www.themeisle.com', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_about_website', array(

        'label' => __('Website', 'rokophoto'),

        'section' => 'rokophoto_about_content',

        'priority' => 15,

        'settings' => 'rokophoto_about_website'

    ));



    $wp_customize->add_setting('rokophoto_about_heading', array(

        'default' => __('I love WordPress', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_about_heading', array(

        'label' => __('Heading', 'rokophoto'),

        'section' => 'rokophoto_about_content',

        'priority' => 20,

        'settings' => 'rokophoto_about_heading'

    ));



    $wp_customize->add_setting('rokophoto_about_bio', array(

        'default' => __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'esc_textarea'

    ));



    $wp_customize->add_control('rokophoto_about_bio', array(

        'type' => 'textarea',

        'label' => __('Bio', 'rokophoto'),

        'section' => 'rokophoto_about_content',

        'priority' => 25,

        'settings' => 'rokophoto_about_bio'

    ));
	
	
	$wp_customize->add_setting( 'rokophoto_contact_display_settings');

	
	$wp_customize->add_control('rokophoto_contact_display_settings',array(

		'type' => 'checkbox',
		
		'label' => __('Disable Contact','rokophoto'),
		
		'section' => 'rokophoto_contact_settings',
		
		'priority' => 5,
	));



    $wp_customize->add_setting('rokophoto_contact_heading', array(

        'default' => __('WORK w/ ME', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_text_field'

    ));



    $wp_customize->add_control('rokophoto_contact_heading', array(

        'label' => __('Section Title', 'rokophoto'),

        'section' => 'rokophoto_contact_settings',

        'priority' => 10,

        'settings' => 'rokophoto_contact_heading'

    ));



    $wp_customize->add_setting('rokophoto_contact_email', array(

        'default' => __('you@domain.com', 'rokophoto'),

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'is_email'

    ));



    $wp_customize->add_control('rokophoto_contact_email', array(

        'label' => __('Email', 'rokophoto'),

        'section' => 'rokophoto_contact_details',

        'priority' => 5,

        'settings' => 'rokophoto_contact_email'

    ));
	

}

add_action('customize_register', 'rokophoto_customize_register');

?>