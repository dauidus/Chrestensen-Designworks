<?php get_header(); ?>

<?php get_sidebar(); ?>
	
	<!-- section -->
	<section role="main">
	
		<!-- <h1><?php the_title(); ?></h1> -->
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<!-- <?php // comments_template( '', true ); // Remove if you don't want comments ?> -->
			
			<br class="clear">
			
			<div class="blurb-widget">
				<?php if (is_page(Home)) {
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-home-blurb'));
				} else if (is_page(About)) {
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-about-blurb'));
				} else if (is_page(Clients)) {
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-clients-blurb'));
				} else if (is_page(Contact)) {
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-contact-blurb'));
				} ?>
			</div>
			
			<div class="edit-link">
				<?php //edit_post_link( '[ edit in admin ]' ); ?>
			</div>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->
	

<?php get_footer(); ?>