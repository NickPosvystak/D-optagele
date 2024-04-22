<?php
/**
 * side bar template
 *
 * @package Cinematic Videography
 */
?>
<?php if ( ! is_active_sidebar( 'cinematic-videography-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('cinematic-videography-woocommerce-sidebar'); ?>
	</div>
</div>