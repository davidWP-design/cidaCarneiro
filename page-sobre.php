<?php  
/*
 Template Name: Página Sobre
 */
 ?>

		<!-- header -->
		<?php get_header(); ?>
			<div class="conteudo col-sm-12 col-md-9 col-lg-9 col-xl-9 order-sm-2 ">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>    
                        <?php the_content();?>

                    <?php endwhile; endif; ?>
        
            </div>
            
    
    </div> <!--/row-->
        <?php get_footer(); ?>