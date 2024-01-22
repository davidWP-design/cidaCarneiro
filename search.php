
<!--MOSTRA RESULTADOS DE PESQUISA-->
<?php get_header(); ?>
<div class="conteudo-wrapper">
		<div class="container">
			<div class="row">
           		<div class="conteudo col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h1>Resultados de pesquisa para: <?php echo get_search_query(); ?></h1>


					<?php 

						get_search_form();

						while(have_posts()): the_post();

							// O conteúdo do template em si estará em content-single.php
							get_template_part('content', 'search');

							// Verificando se os comentários estão abertos no post e se há algum comentário publicado
							// Se houver um ou outro, chamamos o nosso template de comentários padrão 
							if( comments_open() || get_comments_number()):
								comments_template();
							endif;	
						endwhile;

						the_posts_pagination(array(
							'prev_text'		=> 	'Anterior',
							'next_text'		=>	'Próximo'
						));

					?>
				</div>
			

<?php get_footer(); ?>
