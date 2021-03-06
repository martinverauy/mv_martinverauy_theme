<?php
/**
 * Custom post pagination with bootstrap .post-pagination class.
 *
 * @return void
 *
 * @package MV_MartinVeraUy_Theme
 */
function bootstrap_post_pagination() {
	previous_post_link( '%link', '<ul class="pager" style="float:left;"><li class="previous nav-previous"><span class="meta-nav">' . _x( '&laquo; Previous', 'Previous post link', 'MV_MartinVeraUy_Theme' ) . '</span> </li></ul>' );
	next_post_link( '%link', '<ul class="pager"><li class="next nav-next"><span class="meta-nav">' . _x( 'Next &raquo;', 'Next post link', 'MV_MartinVeraUy_Theme' ) . '</span> </li></ul>' );
}
