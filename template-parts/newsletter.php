<?php
/**
 * Template part for displaying the newsletter from Mailchimp plugin
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<?php
$themeOption = get_option('my_theme_option');
if($themeOption['Mailchimp Shortcode']){
	?>
	<section class="newsletter text-center">
		<div class="container">
			<div class="site__block bg--red">
				<?php echo do_shortcode($themeOption['Mailchimp Shortcode']); ?>
			</div>
		</div>
	</section>
<?php } ?>

