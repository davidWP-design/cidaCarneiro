<!--Página index-->

		
		<!-- header -->
		<?php get_header(); ?>
			<div class="conteudo col-sm-12 col-md-8 col-lg-8 col-xl-8 order-sm-2 ">

          <!--INICIO LOOP WP-->	 
          <?php 
              if(have_posts()) :

            
                while (have_posts()) : the_post(); 
          ?>

          <?php get_template_part('content', get_post_format()); ?>

                              
            <?php 
                endwhile;
            ?>

            <div class="paginacao">
				<div class="left"><?php previous_post_link(); ?></div>
				<div class="right"><?php next_post_link(); ?></div>	
			</div>


            <?php else:?>
              <p>Nao tem nada ainda pra mostrar</p>
                              
            <?php endif; ?>
			  </div>
			  
     
			<!-- BARRA LATERAL -->
			<aside class="barra-lateral col-sm-12 col-md-2 col-lg-2 order-sm-3">

				<?php get_sidebar( 'blog' ) ?>


			</aside>
    </div>
            </div>
<?php get_footer(); ?>
