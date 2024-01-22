<?php
/*
 Template Name: Página Foto Galeria
 */
 ?>
<!-- página foto -->
<?php get_header(); ?>
<div class="conteudo-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="logo col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="home"><img src="<?php echo wp_get_attachment_url(get_theme_mod('set_logo')); ?>" alt="Cida Carneiro"></a>
			</div>
		   <div class="row">
			     <div class="conteudo col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <!--INICIO LOOP WP-->
           <?php
               // args
               $args = array(
                 'post_type' => 'post',
                 'posts_per_page' => 2,
                 'category__in' => 7,
                 'order' => 'ASC',
               );
               // query
               $query = new WP_Query ( $args );
           ?>
           <?php if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>
             	<?php get_template_part('content', 'galeria'); ?>
           <?php endwhile; endif; ?>
           <?php wp_reset_query(); ?>
           <!--FINAL LOOP-->

           <!-- Páginação -->
           <div class="paginacao">
             <?php
                function your_themes_pagination(){
                    global $wp_query;
                    echo paginate_links();
                }
              ?>
           </div>
			    </div>
			     <!-- /div conteudo -->
         <div class="menu-principal col-xs-12 col-sm-3 col-md-3 col-lg-3">
     			<!--Função WP que mostra o Menu no Tema-->
     			<?php wp_nav_menu( array(
     				'theme_location' => 'meu_menu_principal'
     			));
     			?>
     			<?php $template_directory = get_template_directory_uri(); ?>
     			<div class="social-links">
     				<a href="tel:5562999437868"><img src="<?php echo $template_directory; ?>/img/whats2.png" alt="WhatsApp"></a>
     				<a href="mailto:cidacarneiro@gmail.com"><img src="<?php echo $template_directory; ?>/img/email2.png" alt="E-Mail"></a>
     				<a href="https://www.instagram.com/cidacarneiro.arte/" target="_blank"><img src="<?php echo $template_directory; ?>/img/insta2.png" alt="Instagram"></a>
     			</div>
     		</div>
     		<!-- /div menu-principal -->
     	</div>
     	<!-- /row -->
    </div>
     <!-- /container -->
 </div>
  <!-- /conteudo-wrapper-->

<?php get_footer(); ?>
