<!-- sidebar -->
<div class="sidebar">

	<?php // get_template_part('searchform'); ?>
    		
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-sidebar-logo')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
		
</div>
<!-- /sidebar -->