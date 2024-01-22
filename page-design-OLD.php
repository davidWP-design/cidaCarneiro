<?php  
/*
 Template Name: Página Design Galeria
 */
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
 			<div class="conteudo col-xs-12 col-sm-9 col-md-9 col-lg-9">		 
 				<?php 

 				$op_content = 'galeria';

			                        // Quais categorias serão inclusas na nossa listagem?
 				$itens = get_categories(array('include' => '8'));

									// echo '<pre>';
									// print_r($itens);
									// echo '</pre>';

									// Para cada categoria encontrada, buscamos um só item dessa categoria
 				foreach($itens as $item):

										// Pegamos cada item dentro do loop para compor nossa consulta
 					$args = array(
 						'category__in' => $item->cat_ID,
 						'posts_per_page' => 3
 					);

										// Criação do objeto da classe WP_Query
 					$consulta = new WP_Query($args);

										// O loop WordPress (consulta padrão modificada)
 					if($consulta->have_posts()):
 						while($consulta->have_posts()):
 							$consulta->the_post();

										// Abaixo, usamos as variáveis $tamanho e $op_content
										// Na primeira repetição do loop, elas têm o valor indicado acima. Na segunda e terceira, mudam de valor
 							?>
 							<div class="<?php echo $tamanho; ?>">
 								<?php get_template_part('content', $op_content); ?>
 							</div>								

 							<?php


 						endwhile;
											// Reseta a consulta a cada passo do loop
 						wp_reset_postdata();

 					endif;

									// Fim do loop foreach
 				endforeach;

 				?>
 			</div>
 			<!-- /div conteudo -->                   


 			<?php get_footer(); ?>
