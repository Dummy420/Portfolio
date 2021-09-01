<?php


function portfolio_styles() {
  wp_enqueue_style('portfolio_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'portfolio_styles');

function portfolio_scripts() {
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-2.1.3.min.js', [], '', true);
  wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', [], '', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], '', true);
  wp_enqueue_script('mordernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
  wp_enqueue_script('pace', get_template_directory_uri() . '/assets/js/pace.min.js');
}
add_action('wp_enqueue_scripts', 'portfolio_scripts');


function portfolio_customize_register( $wp_customize ) {
  
  $wp_customize->add_panel('page-content', [
    'title'     => 'Contenu de ma page',
    'description' => 'Contenu de la page d\'accueil',
    'priority'    => 120
  ]);

  // * PAGE INTRO
  $wp_customize->add_section('page-intro', [
    'title'       =>  'Section Intro',
    'panel'       =>  'page-content'
  ]);

  $wp_customize->add_setting('page-intro-bg', [
    'default-image'   =>  get_template_directory_uri() . '/assets/images/earth.webp',
    'transport'       =>  'refresh',
    'height'          =>  1064,
    'width'           =>  708
  ]);
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page-intro-bg', [
    'label'           =>  'Background de l\'intro',
    'section'         =>  'page-intro',
    'settings'        =>  'page-intro-bg'
  ]));

  $wp_customize->add_setting('page-presentation', [
    'capability'      =>  'edit_theme_options',
    'default'         =>  'Je suis Clément Pavel,
    Étudiant en Licence Pro MIAW
    spécialisation DAWI',
  ]);
  $wp_customize->add_control('page-presentation', [
    'type'      =>  'textarea',
    'section'   =>  'page-intro',
    'label'     =>  'Contenu de la présentation du site',
  ]);

  // * PAGE ABOUT
  $wp_customize->add_section('page-about', [
    'title'       =>  'Section About',
    'panel'       =>  'page-content'
  ]);

  $wp_customize->add_setting('page-about-bg', [
    'default-image'     =>  get_template_directory_uri() . '/assets/images/earth.webp',
    'transport'       =>  'refresh',
    'height'          =>  1064,
    'width'           =>  708
  ]);
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page-about-bg', [
    'label'           =>  "Background de la section `a Propos`",
    'section'         =>  'page-about',
    'settings'        =>  'page-about-bg'
  ]));

  $wp_customize->add_setting('page-about-text', [
    'capability'      =>  'edit_theme_options',
    'default'         =>  'Je suis Étudiant en LP MIAW spécialisation DAWI, dans le développement de sites Web, Internet & Intranet'
  ]);
  $wp_customize->add_control('page-about-text', [
    'type'            =>  'textarea',
    'section'         =>  'page-about',
    'label'           =>  "Contenu de la section about de la page"
  ]);

  $wp_customize->add_setting('page-about-cv', [
    'capability'      =>  'edit_theme_options'
  ]);
  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'page-about-cv', [
    'section'         =>  'page-about',
    'label'           =>  'CV',
    'mime_type'       =>  'pdf'
  ]));

  // * Section Skills
  $wp_customize->add_section('page-skills', [
    'title'       =>  'Section Skills',
    'panel'       =>  'page-content'
  ]);

  $wp_customize->add_setting('page-skills-bg', [
    'transport'   =>  'refresh',
    'height'      =>  1064,
    'width'       =>  708
  ]);
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page-skills-bg', [
    'label'     =>  "Background de la section `Skills`",
    'section'   =>  'page-skills',
    'settings'  =>  'page-skills-bg'
  ]));
  $wp_customize->add_setting('page-skills-array', [
    'capability'    =>  'edit_theme_options'
  ]);
  $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'page-skills-array', [
    'section'   =>  'page-skills',
    'label'     =>  'Skills'
  ]));

  // * Section Credentials
  $wp_customize->add_section('page-credentials', [
    'title'       =>  'Section Credentials',
    'panel'       =>  'page-content'
  ]);

  $wp_customize->add_setting('page-credentials-experience-array', [
    'capability'    =>  'edit_theme_options'
  ]);
  $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'page-credentials-experience-array', [
    'section'   =>  'page-credentials',
    'label'     =>  'Experiences'
  ]));
  $wp_customize->add_setting('page-credentials-education-array', [
    'capability'    =>  'edit_theme_options'
  ]);
  $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'page-credentials-education-array', [
    'section'   =>  'page-credentials',
    'label'     =>  'Éducation'
  ]));

  // * Section Contact
  $wp_customize->add_section('page-contact', [
    'title'       =>  'Section Contact',
    'panel'       =>  'page-content'
  ]);

  $wp_customize->add_setting('page-contact-bg', [
    'transport'   =>  'refresh',
    'height'      =>  1064,
    'width'       =>  708
  ]);
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page-contact-bg', [
    'label'     =>  "Background de la section `Contact`",
    'section'   =>  'page-contact',
    'settings'  =>  'page-contact-bg'
  ]));
  $wp_customize->add_setting('page-contact-title', [
    'capability'    =>  'edit_theme_options'
  ]);
  $wp_customize->add_control('page-contact-title', [
    'type'            =>  'text',
    'section'         =>  'page-contact',
    'label'           =>  "Titre de la section"
  ]);
  $wp_customize->add_setting('page-contact-subtitle', [
    'capability'    =>  'edit_theme_options'
  ]);
  $wp_customize->add_control('page-contact-subtitle', [
    'type'            =>  'textarea',
    'section'         =>  'page-contact',
    'label'           =>  "Sous titre de la section"
  ]);
}
add_action('customize_register', 'portfolio_customize_register');

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Portfolio 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );


/**
 * Enqueue scripts for the customizer.
 *
 * @since Portfolio 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
  $mimes['eot'] = 'application/vnd.ms-fontobject';
  $mimes['woff'] = 'font/woff';
  $mimes['ttf'] = 'font/ttf';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'socials-menu' => __( 'Menu réseaux Sociaux' ),
      'nav-menu' => __( 'Menu de Navigation' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );