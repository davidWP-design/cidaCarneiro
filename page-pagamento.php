<!--Página de Pagamento-->

<?php
/*Template Name: Paginas Gerais Pagamento*/
?>


<?php get_header(); ?>


<div class="conteudo-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="home"><img src="<?php echo wp_get_attachment_url(get_theme_mod('set_logo')); ?>" alt="Cida Carneiro"></a>
			</div>
		</div>			
		<div class="row">
			<div class="conteudo col-xs-12 col-sm-7 col-md-7 col-lg-7">		 
				
					 <!--INICIO LOOP WP-->
                            <?php 

						while(have_posts()): the_post();

							the_content('pagamento');

						endwhile;	
			 		?>
                      <!--FINAL LOOP-->


			</div>
			<!-- /div conteudo -->             
			<!-- BARRA LATERAL -->
			<aside class="barra-lateral col-xs-12 col-sm-2 col-md-2 col-lg-2">

				<?php get_sidebar('pagamento'); ?>


			</aside>
	



<?php get_footer(); ?>
