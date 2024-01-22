<!--Página da Loja-->

<?php get_header(); ?>

<!--CHAMANDO A FUNÇÃO DE CUSTOMIZAÇÃO DO HEADER DA PÁGINA FUNCTIONS -->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>

<div class="conteudo-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="home"><img src="<?php echo wp_get_attachment_url(get_theme_mod('set_logo')); ?>" alt="Cida Carneiro"></a>
			</div>
		</div>			
		<div class="row">
			<div class="conteudo col-xs-12 col-sm-7 col-md-7 col-lg-7">		 
				
					<!-- woocommerce -->
					<?php woocommerce_content( ); ?>

			</div>
			<!-- /div conteudo -->             
			<!-- BARRA LATERAL -->
			<aside class="barra-lateral col-xs-12 col-sm-2 col-md-2 col-lg-2">
				<?php get_sidebar('loja'); ?>
			</aside>
		



<?php get_footer(); ?>
