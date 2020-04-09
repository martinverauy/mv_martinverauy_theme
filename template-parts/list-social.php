<?php
/**
 * Template part for displaying social links
 *
 * @package MV_MartinVeraUy_Theme
 */

?>
<?php
$themeOption = get_option('my_theme_option');
if($themeOption){
	?>
	<ul class="list-inline list-social">
		<li class="list-inline-item">&copy; <?php echo date('Y'); ?></li>
		<li class="list-inline-item">&#124;</li>
		<li class="list-inline-item">Sigueme en</li>
		<?php
		if($themeOption['Behance']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Behance'].'" target="_blank"><i class="fab fa-behance"></i></a></li>';
		}
		if($themeOption['Facebook']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Facebook'].'" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';
		}
		if($themeOption['Twitter']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Twitter'].'" target="_blank"><i class="fab fa-twitter"></i></a></li>';
		}
		if($themeOption['Instagram']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Instagram'].'" target="_blank"><i class="fab fa-instagram"></i></a></li>';
		}
		if($themeOption['Pinterest']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Pinterest'].'" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>';
		}
		if($themeOption['Linkedin']){
			echo '<li class="list-inline-item list-social__link"><a href="'.$themeOption['Linkedin'].'" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>';
		}
		?>
	</ul>
<?php } ?>

