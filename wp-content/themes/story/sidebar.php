<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Story
 */
?>
	<div id="secondary" class="widget-area" role="complementary" style="background-color:white">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<a style="color:black" href="#"> << Go To HOME</a>
			

			

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
