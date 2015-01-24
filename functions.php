<?php
/**
 * Hey
 * Only edit this file if you know what you're doing or make a backup before editing it
 * Happy Blogging
*/

function rokophotolite_setup() {
    
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 750;
    }

    // Takes care of the <title> tag.
    add_theme_support( 'title-tag' );

    // Add automatic feed links support. http://codex.wordpress.org/Automatic_Feed_Links
    add_theme_support('automatic-feed-links');

    // Add post thumbnails support. http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    
    // Add custom background support. http://codex.wordpress.org/Custom_Backgrounds
    add_theme_support('custom-background', array(
        // Default color
        'default-color' => 'F6F9FA',
    ));
    
    // Add custom header support. http://codex.wordpress.org/Custom_Headers
    add_theme_support('custom-header', array(
        // Defualt image
        'default-image' => get_template_directory_uri() . '/img/01_services.jpg',
    	// Header text
    	'header-text' => false,
    ));

    // This theme uses wp_nav_menu().
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rokophotolite' ),
	) );
}

add_action( 'after_setup_theme', 'rokophotolite_setup' );

// Registering and enqueuing scripts/stylesheets to header/footer.
function rokophotolite_scripts() {
    wp_register_style( 'rokophotolite_style', get_stylesheet_uri());
	wp_register_style( 'rokophotolite_bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_register_style( 'rokophotolite_animate', get_template_directory_uri() . '/css/animate.css');
	wp_register_style( 'rokophotolite_font_awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_register_style( 'rokophotolite_responsiveness', get_template_directory_uri() . '/css/responsiveness.css');

	wp_enqueue_style( 'rokophotolite_bootstrap' );
	wp_enqueue_style( 'rokophotolite_animate' );
	wp_enqueue_style( 'rokophotolite_font_awesome' );
    wp_enqueue_style( 'rokophotolite_style' );
	wp_enqueue_style( 'rokophotolite_responsiveness' );

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script( 'rokophotolite_modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');

    wp_enqueue_script( 'rokophotolite_jquery-min', get_template_directory_uri() . '/js/jquery.min.js','','',true);
    wp_enqueue_script( 'rokophotolite_bootstrap', get_template_directory_uri() . '/js/bootstrap.js','','',true);
    wp_enqueue_script( 'rokophotolite_wow', get_template_directory_uri() . '/js/wow.min.js','','',true);
    wp_enqueue_script( 'rokophotolite_smooth_scroll', get_template_directory_uri() . '/js/SmoothScroll.js','','',true);
    wp_enqueue_script( 'rokophotolite_easing', get_template_directory_uri() . '/js/jquery.easing.min.js','','',true);
    wp_enqueue_script( 'rokophotolite_animate_header', get_template_directory_uri() . '/js/cbpAnimatedHeader.js','','',true);
    wp_enqueue_script( 'rokophotolite_classie', get_template_directory_uri() . '/js/classie.js','','',true);
    wp_enqueue_script( 'rokophotolite_main', get_template_directory_uri() . '/js/main.js','','',true);
}

add_action( 'wp_enqueue_scripts', 'rokophotolite_scripts' );

// Adding IE-only scripts to header.
function rokophotolite_ie () {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="'. get_template_directory_uri() . '/js/html5shiv.min.js"></script>' . "\n";
    echo '<script src="'. get_template_directory_uri() . '/js/respond.min.js"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action('wp_head', 'rokophotolite_ie');

/**
 * Menu fallback. Link to the menu editor if that is useful.
 *
 * @param  array $args
 * @return string
*/

function rokophotolite_new_setup($args)
{
    // see wp-includes/nav-menu-template.php for available arguments

	extract($args);
	$link = $link_before . '<a href="' . esc_url( home_url( '/' ) ) . '">' . $before . __( 'Home', 'rokophotolite' ) . $after . '</a>' . $link_after;

	// We have a list

	if (FALSE !== stripos($items_wrap, '<ul') or FALSE !== stripos($items_wrap, '<ol')) {
		$link = "<li class='menu-item'>$link</li>";
	}

	$output = sprintf($items_wrap, $menu_id, $menu_class, $link);
	if (!empty($container)) {
		$output = '<' . esc_attr( $container) . ' class="' . esc_attr( $container_class ) . '" id="' . esc_attr( $container_id ) . '">' . esc_textarea( $output ) . '</' . esc_attr( $container ) . '>';
	}

	if ($echo) {
		echo $output;
	}

	return $output;
}

function rokophotolite_pagination() {

    if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('&laquo;') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('&raquo;') );

	echo '</ul>' . "\n";

}


function rokophotolite_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class('comment even thread-even'); ?> id="comment-<?php comment_ID() ?>">
    <table class="comment-container wow fadeIn">
        <tr>
            <td class="comment-avatar">
                <?php echo get_avatar( $comment, 70 ); ?>
            </td>
            <td class="comment-data">
                <div class="comment-header">
                    <span class="comment-author"><?php printf(__('%s'), get_comment_author_link()) ?></span>
                    <span class="comment-date"><?php echo get_comment_date(); ?> <?php _e('on', 'rokophotolite'); ?> <?php echo get_comment_time(); ?></span>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
                <div class="comment-body">
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Your comment is awaiting moderation.', 'rokophotolite') ?></em><br />
                    <?php endif; ?>
                    <?php comment_text(); ?>
                </div>
            </td>
        </tr>
    </table>
<?php
}

function rokophotolite_css() {
    if ( is_user_logged_in() ) {
?>
<style>
.comment-login {
    width: 100% !important;
}
</style>
<?php
    }
}
add_action('wp_head', 'rokophotolite_css');

function rokophotolite_customize_register($wp_customize)
{
    $wp_customize->add_section('rokophotolite_logo_section', array(
        'priority' => 25,
        'title' => __('Site Logo', 'rokophotolite'),
    ));
    
    $wp_customize->add_section('rokophotolite_social_section', array(
        'priority' => 50,
        'title' => __('Social Links', 'rokophotolite'),
    ));

    $wp_customize->add_setting('rokophotolite_logo_image', array(
        'default' => get_template_directory_uri().'/img/logo.png',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophotolite_logo_image', array(
        'label' => __('Site Logo Image', 'rokophotolite'),
        'section' => 'rokophotolite_logo_section',
        'priority' => 5,
        'settings' => 'rokophotolite_logo_image'
    )));

    $wp_customize->add_setting('rokophotolite_facebook_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_facebook_link', array(
        'label' => __('Facebook URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 5,
        'settings' => 'rokophotolite_facebook_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_twitter_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_twitter_link', array(
        'label' => __('Twitter URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 10,
        'settings' => 'rokophotolite_twitter_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_behance_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_behance_link', array(
        'label' => __('Behance URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 15,
        'settings' => 'rokophotolite_behance_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_dribbble_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_dribbble_link', array(
        'label' => __('Dribbble URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 20,
        'settings' => 'rokophotolite_dribbble_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_flickr_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_flickr_link', array(
        'label' => __('Flickr URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 25,
        'settings' => 'rokophotolite_flickr_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_googleplus_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_googleplus_link', array(
        'label' => __('Google + URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 30,
        'settings' => 'rokophotolite_googleplus_link'
    ));
    
    $wp_customize->add_setting('rokophotolite_instagram_link', array(
        'default' => '#',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('rokophotolite_instagram_link', array(
        'label' => __('Instagram URL', 'rokophotolite'),
        'section' => 'rokophotolite_social_section',
        'priority' => 35,
        'settings' => 'rokophotolite_instagram_link'
    ));
}
add_action('customize_register', 'rokophotolite_customize_register');