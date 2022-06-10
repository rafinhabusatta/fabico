<?php
/**
 * starter-theme Theme Customizer
 *
 * @package starter-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function starter_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'starter_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'starter_theme_customize_partial_blogdescription',
		) );
	}
	// CUTOMIZER AREA
	$wp_customize->add_section('showcase', array(
		'title' => __('Titulo', 'starter-theme'),
		'description' => sprintf(__('Descrição', 'starter-theme')),
		'priority' => 130
	));
	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Custom Bootstrap Wordpress Theme', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Cabeçalho', 'starter-theme'),
		'section' => 'showcase',
		'priority' => 1
	));

	$wp_customize->add_setting('showcase_text', array(
		'default' => _x('Texto', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('showcase_text', array(
		'label' => __('Texto', 'starter-theme'),
		'section' => 'showcase',
		'priority' => 2
	));

	$wp_customize->add_setting('btn_url', array(
		'default' => _x('http://ufrgs.br', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('btn_url', array(
		'label' => __('URL Botão', 'starter-theme'),
		'section' => 'showcase',
		'priority' => 3
	));

	$wp_customize->add_setting('btn_text', array(
		'default' => _x('Leia mais', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('btn_text', array(
		'label' => __('Texto Botão', 'starter-theme'),
		'section' => 'showcase',
		'priority' => 4
	));

	$wp_customize->add_setting('showcase_image', array(
		'default' => get_bloginfo('template_directory').'/img/comgrads.png', 'starter-theme',
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label' => __('Imagem', 'starter-theme'),
		'section' => 'showcase',
		'settings' => 'showcase_image',
		'priority' => 5
	)));

	// HEADER PAGE CUSTOMIZER
	$wp_customize->add_section('header_page', array(
		'title' => __('A Fabico', 'starter-theme'),
		'description' => sprintf(__('Edite informações da página A Fabico, como o título, frase de efeito, cor de fundo e textos.', 'starter-theme')),
		// 'priority' => 131
	));
	$wp_customize->add_setting('header_page_title', array(
		'default' => _x('Título da Página', 'starter-theme'),
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field'
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('header_page_title', array(
		'label' => __('Título', 'starter-theme'),
		'description' => __('escreva o título', 'starter-theme'),
		'section' => 'header_page',
		'type' => 'text',
		'priority' => 1
	));

	$wp_customize->add_setting('header_page_text', array(
		'default' => _x('Frase de efeito...', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('header_page_text', array(
		'label' => __('Frase de efeito', 'starter-theme'),
		'section' => 'header_page',
		'type' => 'textarea',
		'priority' => 2
	));

	$wp_customize->add_setting('header_page_background', array(
		'default' => _x('#001E50', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('header_page_background', array(
		'label' => __('Background Color', 'starter-theme'),
		'section' => 'header_page',
		'type' => 'color',
		'priority' => 3
	));


	// BLOCK AREA CUSTOMIZER
	$wp_customize->add_section('block_area', array(
		'title' => __('Bloco', 'starter-theme'),
		'description' => sprintf(__('Edite informações do bloco, como o título, imagens e parágrafos.', 'starter-theme')),
		// 'priority' => 131
	));
	$wp_customize->add_setting('block_title', array(
		'default' => _x('Título do Bloco', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('block_title', array(
		'label' => __('Título', 'starter-theme'),
		'section' => 'block_area',
		'priority' => 1
	));
	
	$wp_customize->add_setting('block_paragraph', array(
		'default' => _x('Parágrafo do Bloco', 'starter-theme'),
		'type' => 'theme_mod',
		//'transport' => 'refresh'
	));
	$wp_customize->add_control('block_paragraph', array(
		'label' => __('Parágrafo', 'starter-theme'),
		'section' => 'block_area',
		'priority' => 2
	));



	
}
add_action( 'customize_register', 'starter_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function starter_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function starter_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function starter_theme_customize_preview_js() {
	wp_enqueue_script( 'starter-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'starter_theme_customize_preview_js' );
