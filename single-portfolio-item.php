<?php get_header(); ?>

<?php get_sidebar(); ?>
	
	<!-- section -->
	<section role="main">
	
		<!-- <h1><?php the_title(); ?></h1> -->
		<article>
			
			<div id="portfolio-slides">
				<ul class="bxslider">
					
					<?php 
					$orange_box_text = (types_render_field("portfolioitem-description", array()));
					if ($orange_box_text != "") {
						print '
							<li>
							<div id="portfolio-orange-box">
								<div id="box-image">
									<img src="';
						echo get_site_url();
						print '/wp-content/themes/CDW-child-by-dauidus/images/box-title.png"><div id="box-title">';
						echo the_title();
						print '</div>
								</div>
								   
								   
									<div id="box-text">   
								   ';
						echo (types_render_field("portfolioitem-description", array()));
						print '
									</div>
							</div>
							</li>';
					} else {
						
					} ?>
					
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'first-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'first-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'second-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'third-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fourth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fourth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fifth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'sixth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'sixth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'seventh-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'seventh-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'eighth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'eighth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'ninth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'ninth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'tenth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'tenth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'eleventh-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'eleventh-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'twelfth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'twelfth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'thirteenth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'thirteenth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fourteenth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fourteenth-slide' );	
					} else {						
					} ?>
					
					<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'fifteenth-slide')) {
						MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifteenth-slide' );	
					} else {						
					} ?>
											
				</ul>
			</div>
			
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