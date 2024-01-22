<?php 

function meuPersonalizador($wp_customize){
	
	//SEÇÃO COPYRIGHT
	$wp_customize->add_section( 'sec_copyright', array(
		'title'  			=>  'Copyright',
		'description'		=>	'Seção para Copyright'
	));	

	$wp_customize->add_setting( 'set_copyright', array(
		'type'				=>	'theme_mod', 
		'defaut'			=>	'Copyright - Todos os Direitos Reservados'
	));

	$wp_customize->add_control( 'ctrl_copyright', array(
		'label'				=>	'Copyright',
		'decription'		=> 'Informe o Copyright',
		'section'			=>	'sec_copyright',
		'settings'			=>	'set_copyright',
		'type'				=>	'text'
	));



	// Seção Para adicionar Logo diferente nas Páginas 

	$wp_customize->add_section( 'sec_logo', array(
		'title'			=> 'Logo',
		'description'	=> 'Seção para adicionar Logo em Páginas diferentes da Home'
	));	

	// Imagem
	$wp_customize->add_setting( 'set_logo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_logo', array(
		'label'		=> 'Imagem da Logo',
		'width'		=> 275,
		'height'	=> 300,
		'section'	=> 'sec_logo',
		'settings'	=> 'set_logo'
	)));


	//Seção para adicionar ícones de redes sociais NÃO TERMINADO!!!
	$wp_customize->add_section( 'sec_social', array(
		'title'			=> 'Redes Sociais',
		'description'	=> 'Seção para adicionar icones das redes sociais'
	));	
	
	// Icone WatsApp- Título 
	$wp_customize->add_setting( 'set_social1_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_social1_titulo', array(
		'label' 	=> 'Informe o endereço URL',
		// 'description'	=> 'Informe o título',
		'section'		=> 'sec_social',
		'settings'		=> 'set_social1_titulo',
		'type'			=> 'url'
	) );

	// Icone WatsApp - Descrição
	// $wp_customize->add_setting( 'set_social1_descricao', array(
	// 	'default'	=> ''
	// ));

	// $wp_customize->add_control( 'ctrl_social1_descricao', array(
	// 	'label' 	=> 'Descrição para o serviço 2',
	// 	'description'	=> 'Informe a descrição',
	// 	'section'		=> 'sec_social',
	// 	'settings'		=> 'set_social1_descricao',
	// 	'type'			=> 'textarea'
	// ) );


	// Icone WatsApp - Imagem
	$wp_customize->add_setting( 'set_social1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_social_item1', array(
		'label'		=> 'Imagem do icone do WattsApp',
		'width'		=> 40,
		'height'	=> 40,
		'section'	=> 'sec_social',
		'settings'	=> 'set_social1'
	)));


	// ICONE DE EMAIL
	
	// Icone Email- Título 
	$wp_customize->add_setting( 'set_social2_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_social2_titulo', array(
		'label' 	=> 'Informe o endereço URL',
		// 'description'	=> 'Informe o título',
		'section'		=> 'sec_social',
		'settings'		=> 'set_social2_titulo',
		'type'			=> 'url'
	) );

	// Icone email - Imagem
	$wp_customize->add_setting( 'set_social2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_social_item2', array(
		'label'		=> 'Imagem do icone do Email',
		'width'		=> 40,
		'height'	=> 40,
		'section'	=> 'sec_social',
		'settings'	=> 'set_social2'
	)));
	
}

add_action('customize_register', 'meuPersonalizador');
