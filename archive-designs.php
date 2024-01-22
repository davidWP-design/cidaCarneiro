<?php
// Página de Design
?>

		<!-- header -->
		<?php get_header(); ?>
			<div class="conteudo col-sm-12 col-md-9 col-lg-9 col-xl-9 order-1">

				<!--INICIO LOOP WP-->
				<?php
			        global $wp_query;
                    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
					//args
					$args = array(
						'post_type'      	=> 'designs',
                        'posts_per_page'  	=>  get_option('posts_per_page'),
						'order'   			=> 'DESC',
                        'paged'           	=> $paged,
					);
					//query
					$query = new WP_Query( $args );
				?>

				<?php if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>	

					<!-- conteudo do box  -->
					<div class="box-post mt-5 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-duration="3000" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<figure class="conteudo-post ">
							<a href="<?php the_permalink(); ?>">
								<?php
									if( has_post_thumbnail() ):
										the_post_thumbnail( 'miniatura' ,array('class' => 'img-fluid') );
									endif;
                                    
                                    the_content();
                                   
								?>
							</a>

							<figcaption class="legendas">
								<!-- valores dos campos personalizados -->
                                <?php 

                                    $fields = get_fields();

                                    if( $fields ): 
                                    ?>
                                    <ul class="grupo-campos-personalizados">
                                    <?php foreach( $fields as $name => $value ): ?>
                                        <li class="campo-personalizado"> <?php echo $value; ?></li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
	                       
							</figcaption>

						</figure>

					</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>		
							
				<!--FINAL LOOP-->

			</div>
        </div> <!--/row-->

    <!-- Paginação -->
        <div class="row">
            <div class="box-paginacao col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <div class="paginacao">

                    <?php foreach( paginacao( $query ) as $link ) : ?>

                    <?php if ( $link->isCurrent ): ?>

                        <strong><?php _e( $link->paged ) ?></strong>
                        <?php else : ?>

                        <a href="<?php esc_attr_e( $link->url ) ?>"><?php _e( $link->paged ) ?></a>

                    <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
			


<?php get_footer(); ?>