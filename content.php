<!-- Arquivo que mostra o conteudo nas páginas, chamado pelo loop-->
<article>
	<div class="artigo">
		<div class="titulo_post_padrao">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</div>

		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumb_media', array('class' => 'img-responsive')); ?>

		</a>
		<div class="data_padrao">
			<p>
				Publicado em:<?php echo get_the_date(); ?>
				por <span><?php the_author_posts_link(); ?></span>

			</p>
		</div>

		<div class="categoria_padrao">
			<p>Categorias:

				<span><?php the_category(' '); ?></span>

			</p>
		</div>

		<div class="tag_padrao">
			<p> <?php the_tags('Tags: ', ', '); ?> </p>
		</div>

		<div class="conteudo_post"> 
			<p> <?php the_content(); ?> </p>
		</div>

	</div>
</article>

