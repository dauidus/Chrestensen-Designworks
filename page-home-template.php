<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
	
	<!-- section -->
	<section role="main">
	
		<!-- <h1><?php the_title(); ?></h1> -->
		<article>
		
			<ul id="portfolio">
			
				<?php $args = array( 'post_type' => 'portfolio-item', 'showposts' => 50, 'orderby' => 'menu_order', 'order' => 'desc', 'force_no_custom_order' => TRUE, 'suppress_filters' => false );
		
				$post_shows = new WP_Query($args);
		        //reverse the order of the posts, latest last
		        $array_rev = array_reverse($post_shows->posts);
		        //reassign the reversed posts array to the $post_shows object
		        $post_shows->posts = $array_rev;
		    ?>
		    <?php $captions = array(); ?>         
		        <?php while ( $post_shows->have_posts() ) : $post_shows->the_post(); ?>
		
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<li class="portfolio-item">
							<div class="portfolio-title">
								<div class="portfolio-title-position">
									<?php the_title(); ?>
								</div>
							</div>
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; the_post_thumbnail(); ?>
						</li>
					</a>
		
				<?php endwhile; ?>
								                    
			</ul>
			
		</article>
		
		<div class="clear"></div>	
		
		<div class="blurb-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-home-blurb')); ?>
		</div>
		
		<div class="edit-link">
			<?php //edit_post_link( '[ edit in admin ]' ); ?>
		</div>
	
	</section>
	<!-- /section -->
	

<?php get_footer(); ?>