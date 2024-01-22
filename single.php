


		<!-- header -->
		<?php get_header(); ?>
			<div class="conteudo col-sm-12 col-md-9 col-lg-9 col-xl-9 order-sm-2">		 
				
				<?php while(have_posts()): the_post(); ?>


                    <article>
                        <div class="artigo">
                            <div class="titulo_post">
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <div class="imagem">
                                <a href="<?php the_permalink(); ?>"> 
                                    <?php
                                        if( has_post_thumbnail() ):
                                            the_post_thumbnail( 'imagem-post' ,array('class' => 'img-fluid') );
                                        endif;
                                    
                                    ?>
                                </a>
                            </div>
                            
   
                            <div class="conteudo_post"> 
                                <p> <?php the_content(); ?> </p>
                            </div>
                    
                        </div>
                    </article>
				

				<?php endwhile; ?>


            </div>
            <!-- /div conteudo -->             

		

		<?php get_footer(); ?>
