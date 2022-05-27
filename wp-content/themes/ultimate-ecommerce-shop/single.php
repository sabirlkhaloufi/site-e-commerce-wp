<?php
/**
 * Displaying all single posts.
 * @package Ultimate Ecommerce Shop
 */
get_header(); ?>

<?php do_action( 'ultimate_ecommerce_shop_single_header' ); ?>

<div class="container">
	<main id="main" role="main" class="content-with-sidebar py-3">
	    <div class="wrapper my-3 mx-auto">
		    <?php
		        $ultimate_ecommerce_shop_layout = get_theme_mod( 'ultimate_ecommerce_shop_theme_options','Right Sidebar');
		        if($ultimate_ecommerce_shop_layout == 'One Column'){?>
		        	<div class="singlebox" class="main-content">
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/post/single-post' );
			            endwhile; // end of the loop. ?>
			       	</div>
			    <?php }else if($ultimate_ecommerce_shop_layout == 'Three Columns'){?>
			    	<div class="row">
				    	<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
				       	<div class="col-lg-6 col-md-6 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>
						<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
					</div>
				<?php }else if($ultimate_ecommerce_shop_layout == 'Four Columns'){?>
					<div class="row">
				    	<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2'); ?></div>
				       	<div class="col-lg-3 col-md-3 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>
						<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2'); ?></div>
						<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3'); ?></div>  
					</div> 	
	       		<?php }else if($ultimate_ecommerce_shop_layout == 'Right Sidebar'){?>
	       			<div class="row">
				       	<div class="col-lg-8 col-md-8 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>
						<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
					</div>
				<?php }else if($ultimate_ecommerce_shop_layout == 'One Column'){?>
					<div class="row">
			       		<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
						<div class="col-lg-8 col-md-8 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>	    
			       </div>
				<?php }else if($ultimate_ecommerce_shop_layout == 'Grid Layout'){?>
					<div class="row">
				       	<div class="col-lg-8 col-md-8 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>
						<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
					</div>
				<?php }else {?>
					<div class="row">
				       	<div class="col-lg-8 col-md-8 singlebox" class="main-content">
							<?php while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/post/single-post' );
				            endwhile; // end of the loop. ?>
				       	</div>
						<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
					</div>
				<?php } ?>
	        <div class="clearfix"></div>
	    </div>
	</main>
</div>

<?php do_action( 'ultimate_ecommerce_shop_single_footer' ); ?>

<?php get_footer(); ?>