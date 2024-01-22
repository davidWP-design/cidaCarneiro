<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site da artista plástica Cida Carneiro">
	<link href="style.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<div class="container-fluid">
		<div class="row">
			<div class="box-header mb-2 col-sm-12 col-md-3 order-sm-2">
				
                <header id="header" class="topo">
                        <div class="logo ">

                            <?php the_custom_logo(); ?>

                        </div>

                        <nav class="menu-principal ">

                            <?php wp_nav_menu( array(
                            'theme_location' => 'meu_menu_principal'
                            ));
                            ?>

                        </nav>

                        <!-- Menu Mobile -->
                        <div class="wrapper-menu">
                                <input id="menu-hamburguer" type="checkbox" />
                                <label for="menu-hamburguer">
                                    <div id="box-menu" class="box-icone-menu">
                                        <span class="hamburguer"></span>
                                    </div>
                                </label>
                                <div class="menu-mobile ">
                                    <?php
                                        wp_nav_menu(
                                        array(
                                            'theme_location' => 'meu-menu_mobile'
                                        )
                                        );
                                    ?>
                                </div>
                        </div>
                </header>

            </div>  <!-- /box-header -->




            <!--FINAL HEADER-->