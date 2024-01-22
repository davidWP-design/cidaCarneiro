<?php

	//INCLUINDO ARQUIVO CUSTOMIZER
	require get_template_directory() . '/inc/customizer.php';

    remove_action('wp_head', 'wp_generator');


	//FUNÇÃO CARREGA SCRIPTS
	function carrega_scripts(){
		//Carrega estilos e scripts Bootstrap
		wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');

		wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( ), '4.1.3', true);

        wp_enqueue_script( 'jQuery', ' https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array( ), '3.3.1');

       
		//lightbox
		wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), '2.11.3', ' all');
		wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array(), '2.11.3', true);
   
        
		//Carrega estilos e scripts próprios
		// wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', ' all');

		wp_enqueue_style( 'template_novo', get_template_directory_uri() . '/css/template_novo.css', array(), '2.0', ' all');

        wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js', array( 'jquery' ), '1.0', true);
	
	}
	add_action( 'wp_enqueue_scripts', 'carrega_scripts');

	// FUNÇÃO PARA MENUS
	register_nav_menus(
		array(
			'meu_menu_principal' => 'Menu Principal',
		)
	);

	register_nav_menus(
		array(
			'meu_menu_home' => 'Menu Home',

		)
	);

    register_nav_menus(
		array(
			'meu-menu_mobile' => 'Menu Mobile',

		)
	);
//WOOCOMMERCE
	function woocommerce_support(){
	add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );

//ADICIONA SUPORTE AO TEMA
	add_theme_support( 'custom-background', array(
	'default-image' => '',
    'default-preset' => 'default',
    'default-position-x' => '87',
    'default-position-y' => '416',
    'default-size' => 'auto',
    'default-repeat' => 'no-repeat',
    'default-attachment' => 'scroll',
    'default-color' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',

	));

	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image', 'gallery' ));
	add_theme_support( 'custom-logo', array(
		'height' => 690,
		'width' => 660
	));
	// tamanho das imagens
    add_image_size( 'thumb_media', 200, 200);
	add_image_size( 'imagem-post', 600,500 );
	add_image_size( 'miniatura', 400,300 );

    
	//REGISTRANDO SIDEBARS
	if (function_exists('register_sidebar')){
		register_sidebar(
			array(
				'name'  => 'Barra 	lateral 1',
				'id'    => 'sidebar-1',
				'description'   => 'Barra Lateral da Página Blog',
				'before_widget' => '<div class="widget-wrapper">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-titulo">',
				'after_title'   => '</h2>'
			)
		);

		register_sidebar(
			array(
				'name'  => 'Barra 	lateral 2',
				'id'    => 'sidebar-2',
				'description'   => 'Barra Lateral da Página Geral',
				'before_widget' => '<div class="widget-wrapper">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 class="widget-titulo">',
				'after_title'   => '</h2>'
			)
		);

			register_sidebar(
				array(
					'name'  => 'Barra 	lateral 3',
					'id'    => 'sidebar-3',
					'description'   => 'Barra Lateral da Loja',
					'before_widget' => '<div class="widget-wrapper">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-titulo">',
					'after_title'   => '</h2>'
				)
		);

	  register_sidebar(
      array(
          'name'          => 'Barra Lateral 4',
          'id'            => 'sidebar-4',
          'description'   => 'Barra Lateral do carrinho',
          'before_widget' => '<div class="widget-wrapper">',
          'after_widget'  =>  '</div>',
          'before_title' => '<h2 class="widget-titulo">',
          'after_title'  =>  '</h2>',
      )
      );

		  register_sidebar(
        array(
            'name'          => 'Barra Lateral 5',
            'id'            => 'sidebar-5',
            'description'   => 'Barra Lateral da pagina de pagamento',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  =>  '</div>',
            'before_title' => '<h2 class="widget-titulo">',
            'after_title'  =>  '</h2>',
        )
      );
	}






	// -----------------------------------------------

	// Ocultar categorias o Widget no WordPress

	// -----------------------------------------------

	function exclude_widget_categories($args) {

	// ID da categoria que queremos ocultar.
	 // Se forem várias, separe com vírgulas: '25,32,65'

	$excluded = '06,07,08,11';
	 $args['exclude'] = $excluded;
	 return $args;
	 }

	add_filter( 'widget_categories_args', 'exclude_widget_categories', 10, 1 ); // Se utiliza esse formato de lista na barra lateral

	add_filter( 'widget_categories_dropdown_args', 'exclude_widget_categories', 10, 1 ); //Se utiliza esse formato de lista na barra lateral


	// OCULTAR CATEGORIA DE POSTS

	add_action('pre_get_posts', 'wpa_44672' );

	function wpa_44672( $wp_query ) {

	    //$wp_query is passed by reference.  we don't need to return anything. whatever changes made inside this function will automatically effect the global variable

	    $excluded = array(6,7,8,11);  //made it an array in case you  need to exclude more than one

	    // only exclude on the home page
	    if( is_home() ) {
	        set_query_var('category__not_in', $excluded);
	        //which is merely the more elegant way to write:
	        //$wp_query->set('category__not_in', $excluded);
	    }
	}

    /*
    * PAGINAÇÃO
    */


    function paginacao( $query ) {
        $currentPage = max( 1, get_query_var( 'paged', 1 ) );
        $pages = range( 1, max( 1, $query->max_num_pages ) );
        return array_map( function( $paged ) use ( $currentPage ) {
            return ( object ) array(
                'isCurrent' => $paged == $currentPage,
                'paged' => $paged,
                'url' => get_pagenum_link( $paged )
            );
        }, $pages );
    }



	//CUSTOM POST TYPES

	//OBRAS
	add_action( 'init', 'artes' );
	function artes() {
	    register_post_type( 'artes',
	    array(
	        'labels'            => array(
	            'name'          => __('Arte'),
	            'singular_name' => __('Arte')
	        ),
	        'show_in_rest'  => true,
	        'supports'      => array(
	            'title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments', 'custom-fields'
	        ),
	        'public'                => true,
	        'publicly_queryable'    => true,
	        'show_ui'               => true,
	        'show_in_menu'          => true,
	        'has_archive'           => true,
	        'show_in_rest'          => true,
	        'taxonomies'            => array( 'category', 'post_tag' ),
	        'menu_icon'             => 'dashicons-art',
	        'rewrite'               => array('slug' => 'arte'),
	        'capability_type'       => 'post',

	    ));
	}


    //DESIGN
    add_action( 'init', 'designs' );
    function designs() {
        register_post_type( 'designs',
        array(
            'labels'                 => array(
                'name'              => __('Design'),
                'singular_name'     => __('Design')
            ),
            'show_in_rest'      => true,
            'supports'          => array(
                'title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments', 'custom-fields'
            ),
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'has_archive'           => true,
            'show_in_rest'          => true,
            'taxonomies'            => array( 'category', 'post_tag' ),
            'menu_icon'             => 'dashicons-layout',
            'rewrite'               => array('slug' => 'design'),
            'capability_type'       => 'post',

        ));
    }


	//FOTO
	add_action( 'init', 'fotos' );
	function fotos() {
		register_post_type( 'fotos',
		array(
			'labels'                => array(
				'name'              => __('Foto'),
				'singular_name'     => __('foto')
			),
			'show_in_rest'          => true,
			'supports'              => array(
				'title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments', 'custom-fields'
			),
			'public'                => true,
			'publicly_queryable'    => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'has_archive'           => true,
			'show_in_rest'          => true,
			'taxonomies'            => array( 'category', 'post_tag' ),
			'menu_icon'             => 'dashicons-camera',
			'rewrite'               => array('slug' => 'foto'),
			'capability_type'       => 'post',

		));
	}