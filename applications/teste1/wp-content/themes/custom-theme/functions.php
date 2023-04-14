<?php

function custom_load_scripts(){
    wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_load_scripts' );

function custom_config(){

    register_nav_menus(
        array(
            'custom_main_menu' => esc_html__( 'Main Menu', 'custom' ),
            'custom_footer_menu' => esc_html__( 'Footer Menu', 'custom' )
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );

    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
    add_theme_support( 'wp-block-styles' );
    // add_theme_support( 'editor-color-palette', array(
    //     array(
    //         'name'  => __( 'Primary', 'custom' ),
    //         'slug'  => 'primary',
    //         'color' => '#001E32'
    //     ),
    //     array(
    //         'name'  => __( 'Secondary', 'custom' ),
    //         'slug'  => 'secondary',
    //         'color' => '#CFAF07'
    //     )
    // ) );
    // add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'custom_config', 0 );

function custom_register_block_styles(){
    wp_register_style( 'custom-block-style', get_template_directory_uri() . '/block-style.css' );
    register_block_style(
        'core/quote',
        array(
            'name'  => 'red-quote',
            'label' => 'Red Quote',
            'is_default'    => true,
            //'inline_style'  => '.wp-block-quote.is-style-red-quote { border-left: 7px solid #ff0000; background: #f9f3f3; padding: 10px 20px; }',
            'style_handle' => 'custom-block-style'
        )
    );
}
add_action( 'init', 'custom_register_block_styles' );

add_action( 'widgets_init', 'custom_sidebars' );
function custom_sidebars(){
    register_sidebar(
        array(
            'name'  => esc_html__( 'Blog Sidebar', 'custom' ),
            'id'    => 'sidebar-blog',
            'description'   => esc_html__( 'This is the Blog Sidebar. You can add your widgets here.', 'custom' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 1', 'custom' ),
            'id'    => 'services-1',
            'description'   => esc_html__( 'First Service Area', 'custom' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 2', 'custom' ),
            'id'    => 'services-2',
            'description'   => esc_html__( 'Second Service Area', 'custom' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__( 'Service 3', 'custom' ),
            'id'    => 'services-3',
            'description'   => esc_html__( 'Third Service Area', 'custom' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

function custom_customize_register($wp_customize)
{
    $wp_customize->add_section('home_cards_section', array(
        'title'    => __('Home Cards', 'custom'),
        'priority' => 30,
    ));

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("home_card_{$i}_icon", array(
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "home_card_{$i}_icon", array(
            'label'    => sprintf(__('Card %s Icon', 'custom'), $i),
            'section'  => 'home_cards_section',
            'settings' => "home_card_{$i}_icon",
        )));

        $wp_customize->add_setting("home_card_{$i}_title", array(
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control("home_card_{$i}_title", array(
            'label'    => sprintf(__('Card %s Title', 'custom'), $i),
            'section'  => 'home_cards_section',
            'settings' => "home_card_{$i}_title",
            'type'     => 'text',
        ));

        $wp_customize->add_setting("home_card_{$i}_description", array(
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control("home_card_{$i}_description", array(
            'label'    => sprintf(__('Card %s Description', 'custom'), $i),
            'section'  => 'home_cards_section',
            'settings' => "home_card_{$i}_description",
            'type'     => 'textarea',
        ));

        $wp_customize->add_setting("home_card_{$i}_link", array(
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control("home_card_{$i}_link", array(
            'label'    => sprintf(__('Card %s Link', 'custom'), $i),
            'section'  => 'home_cards_section',
            'settings' => "home_card_{$i}_link",
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'custom_customize_register');

if ( ! function_exists( 'wp_body_open' ) ){
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}