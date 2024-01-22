<!-- CONTEUDO CARREGADO PARA POST FORMATO VIDEO  -->
<article>
	<div class="artigo">
		<div class="titulo_post">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<div class="data">
			<p>
				Publicado em:<?php echo get_the_date(); ?>
				por <span><?php the_author_posts_link(); ?></span>

			</p>
		</div>

		<div class="categoria">
			<p>Categorias:

				<span><?php the_category(' '); ?></span>

			</p>
		</div>
		<div class="conteudo_post"> 
			<p> <?php the_content(); ?> </p>
		</div>
	</article>


