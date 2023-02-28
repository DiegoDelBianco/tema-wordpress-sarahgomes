<?php

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    	set_post_thumbnail_size( 600, 600, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 600, 9999 );


add_theme_support( 'custom-logo', 
			array(
				'height'               => 100,
				'width'                => 400,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			) );

add_theme_support( 'custom-header',
			array(
        	// Default Header Image to display
        	'default-image'         => get_template_directory_uri() . '/img/headers/IMG_0184.jpg',
        	'header-text'           => TRUE,

			) );

function register_menu(){
	register_nav_menus(
		array(
			'header-menu' => __('Principal'),
			'footer-menu' => __('Rodape'),
		)
	);
}
add_action("init", "register_menu");






function sarahgomes_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'texto-inicial-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'Seu Book comasdf o melhor de você',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'texto-inicial',
	        array(
	            'label'          => __( 'Titulo do banner'),
	            'section'        => 'static_front_page',
	            'settings'       => 'texto-inicial-set',
	            'type'           => 'textarea'
	        )
	    )
	);
	$wp_customize->add_setting( 'texto-t-inicial-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'Veja o que os melhores lugares de São Paulo para fazer seu Book.',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'texto-t-inicial',
	        array(
	            'label'          => __( 'Texto do banner'),
	            'section'        => 'static_front_page',
	            'settings'       => 'texto-t-inicial-set',
	            'type'           => 'textarea'
	        )
	    )
	);
	$wp_customize->add_setting( 'texto-a-inicial-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '#',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'texto-a-inicial',
	        array(
	            'label'          => __( 'Link do banner'),
	            'section'        => 'static_front_page',
	            'settings'       => 'texto-a-inicial-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);




	$wp_customize->add_setting( 'telefone-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '11 9 9999-9999',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'telefone',
	        array(
	            'label'          => __( 'Telefone'),
	            'section'        => 'title_tagline',
	            'settings'       => 'telefone-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);

	$wp_customize->add_setting( 'email-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'contato@contato.com.br',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'email',
	        array(
	            'label'          => __( 'E-mail de contato'),
	            'section'        => 'title_tagline',
	            'settings'       => 'email-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);

	$wp_customize->add_setting( 'endereco-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'Rua ..., São Paulo - SP',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'endereco',
	        array(
	            'label'          => __( 'Endereço'),
	            'section'        => 'title_tagline',
	            'settings'       => 'endereco-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);



	$wp_customize->add_setting( 'sobre-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'Meu nome é Sarah Salgado Gomes e lorem ipsum gomem somem dorim com lar',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'sobre',
	        array(
	            'label'          => __( 'Sobre no Rodapé'),
	            'section'        => 'title_tagline',
	            'settings'       => 'sobre-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);



	$wp_customize->add_setting( 'facebook-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'https://facebook.com/',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'facebook',
	        array(
	            'label'          => __( 'Facebook'),
	            'section'        => 'title_tagline',
	            'settings'       => 'facebook-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);

	$wp_customize->add_setting( 'instagram-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'https://instagram.com.br/',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'instagram',
	        array(
	            'label'          => __( 'Instagram'),
	            'section'        => 'title_tagline',
	            'settings'       => 'instagram-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);

	$wp_customize->add_setting( 'twitter-set', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => 'https://twitter.com.br/',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'twitter',
	        array(
	            'label'          => __( 'Twitter'),
	            'section'        => 'title_tagline',
	            'settings'       => 'twitter-set',
	            'type'           => 'textarea'
	            //'type'           => 'dropdown-pages'
	        )
	    )
	);






}
add_action( 'customize_register', 'sarahgomes_customize_register' );