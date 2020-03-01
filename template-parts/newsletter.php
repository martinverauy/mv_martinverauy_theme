<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<?php
$themeOption = get_option('my_theme_option');
if($themeOption['Mailchimp Shortcode']){
	?>
	<section class="newsletter">
		<div class="container">
			<div class="newsletter__block">
				<?php echo do_shortcode($themeOption['Mailchimp Shortcode']); ?>
			</div>
		</div>
	</section>
<?php } ?>

