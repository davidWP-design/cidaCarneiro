<!--Páginas gerais-->
<?php
/*Template Name: Paginas Gerais*/
?>

<?php get_header(); ?>


<div class="conteudo-wrapper">
	<div class="container-fluid">
					
		<div class="row">
			<div class="conteudo col-xs-12 col-sm-7 col-md-7 col-lg-7">		 
				<?php 
				// Se houver algum post
				if(have_posts()) :

					// Enquanto houver algum post, chame o post de determinada maneira
					while (have_posts()) : the_post(); 
						?>

						<?php get_template_part('content', 'geral'); ?>

						
						<?php 
					endwhile;

					?>

					<div class="paginacao">
						<div class="left"><?php next_posts_link("<< Mais antigos"); ?></div>
						<div class="right"><?php previous_posts_link("Mais novos >>"); ?></div>
					</div>


					<?php
				else:
					?>
					<p>Nao tem nada ainda pra mostrar</p>
					
				<?php 
				endif;
				?>

			</div>
			<!-- /div conteudo -->             
			<!-- BARRA LATERAL -->
			<aside class="barra-lateral  col-xs-12 col-sm-2 col-md-2 col-lg-2">

				<?php get_sidebar( 'pagina-geral' ) ?>


			</aside>

<?php get_footer(); ?>
