<?php get_header(); ?>
	
<?php get_sidebar(); ?>

	<!-- section -->
	<section role="main">
	
		<?php echo do_shortcode('[custom-mapping width="700"]'); ?>
		<?php // build_i_world_map(2); ?>
	
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>
