			<!-- footer -->
			<footer class="footer" role="contentinfo">
				
				<!-- copyright -->
				<p class="copyright">
					&copy; Copyright Chrestensen Designworks, <?php echo date("Y"); ?>. No written or visual material shall be reproduced or reused in any way without the sole written consent of the author and/or creators of the artwork displayed.
				</p>
				<!-- /copyright -->
				
			</footer>
			<!-- /footer -->
		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<?php if ( 'portfolio-item' == get_post_type() ) { ?>
			<script>
				$(document).ready(function(){
					$('.bxslider').bxSlider();
  				});
			</script>
		<?php } ?>
	
	</body>
</html>