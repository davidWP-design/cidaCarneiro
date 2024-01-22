<!-- CONTEUDO FORMATO IMAGEM  -->
<article>
	<div class="artigo">
		<div class="titulo_post">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>
		<div class="imagem">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>

			</a>
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

		<div class="tag">
			<p> <?php the_tags('Tags: ', ', '); ?> </p>
		</div>
		<div class="conteudo_post"> 
			<p> <?php the_content(); ?> </p>
		</div>

	</div>
</article>
