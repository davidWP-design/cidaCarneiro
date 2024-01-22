<?php
// Página de Arquivo
?>

		<!-- header -->
		<?php get_header(); ?>
			<div class="conteudo col-sm-12 col-md-8 col-lg-8 col-xl-8 order-sm-2 ">
            <!--INICIO LOOP WP-->
            <?php 

            the_archive_title('<h1 class="titulo-arquivo">','</h1>');
            the_archive_description();

            if(have_posts()) :
                while (have_posts()) : the_post(); 

                    get_template_part('content', 'archive'); 
                    
                endwhile;       
                ?>
                <div class="paginacao">
                    <div class="left"><?php next_posts_link("<< Mais antigos"); ?></div>
                    <div class="right"><?php previous_posts_link("Mais novos >>"); ?></div>
                </div>                    

                <?php else: ?>
                    <p>Nao tem nada ainda pra mostrar!</p>
                <?php endif; ?>

                <!--FINAL LOOP-->
            </div>
            <!--/ div conteudo-->

            <!-- BARRA LATERAL -->
			<aside class="barra-lateral col-sm-12 col-md-2 col-lg-2 order-sm-3">

                <?php get_sidebar( 'blog' ) ?>


            </aside>
            </div>
            </div>

            <!--CHAMANDO O FOOTER-->
            <?php get_footer();?>
