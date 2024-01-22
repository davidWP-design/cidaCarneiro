<?php  
/*
 Template Name: Página Galeria
 */
?>

<?php get_header(); ?>
		<div class="conteudo-wrapper">
				 <div class="container">
						<div class="row">
							<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12">

								<a href="home"><img src="<?php echo wp_get_attachment_url(get_theme_mod('set_logo')); ?>" alt="Cida Carneiro"></a>
							</div>
						</div>
						<div class="row">
							<div class="conteudo col-xs-12 col-sm-9 col-md-9 col-lg-9">
								 <!-- INICIO LOOP WP -->

											<?php

											 // SE HOUVER POST
													 if (have_posts()) :
													//ENQUANTO HOUVER POST, CHAME O POST DE DETERMINADA MANEIRA
													while (have_posts()) : the_post();
											?>

															<!-- CHAMANDO O CONTENT.PHP PARA DIFERENCIAR TIPOS DE POSTS -->
															<?php get_template_part('content', get_post_format()); ?>

															<?php
													endwhile;
															else :
															?>
																	<p>Não tem nada ainda pra mostrar...</p>

													<?php
															endif;
													?>
													<!-- FINAL LOOP -->
							</div>
							<!-- /div conteudo -->


 <?php get_footer(); ?>
