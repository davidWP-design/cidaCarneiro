<?php 

		//Usando WP_Query com query string

		// 1 Criamos o objeto da classe e passamos os valores diretamente pela string 
		$galeria = new WP_Query('post_type=post&posts_per_page=1&cat=6,8');

		// 2 Construímos nosso loop com dados vindos do objeto criado
		if($galeria->have_posts()):
			while($galeria->have_posts()):
				$galeria->the_post();
		?>
			<div class="col-md-12">
				<?php 
				// 3 Dentro do loop, chamamos a estrutura do post através de um arquivo de template	
				get_template_part('content','gallery'); 
				?>
			</div>
			
		<?php
			endwhile;

			// 4 Resetamos os dados da consulta 
			wp_reset_postdata();

		endif;

		 ?>

		<?php 

		//Usando WP_Query com array

		// 1 Criamos o array e passamos os valores desejados 
		$args = array(
			'pagename' 			=> 	'page_slug',
			'post_type'			=>	'post',
			'posts_per_page'	=> 	2,
			'category__not_in'	=>	array(7),
			'category__in'		=>	array(6,8),
			'offset'			=>	1
		);

		// 2 Criamos o objeto e passamos o array para o construtor da classe
		$secundarias = new WP_Query($args);

		// 3 Criamos nosso loop
		if($secundarias->have_posts()):
			while($secundarias->have_posts()):
				$secundarias->the_post();
		?>
			<div class="col-md-6">
				<?php 
				// 4 Dentro do loop, chamamos a estrutura do post através de um arquivo de template	
				get_template_part('content','secundaria'); 
				?>
			</div>
			
		<?php
			endwhile;
			// 5 Resetamos os dados da consulta 
			wp_reset_postdata();
		endif;

		 ?>
