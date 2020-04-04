<?php
/**
 * Adding button and a modal with a QR Code for scan to go mobile
 *
 * @package MV_MartinVeraUy_Theme
 */

$themeOption = get_option('my_theme_option');
if ( $themeOption['Go Mobile'] == 'Si' ) {
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	?>
	<div class="footer-site__mobile">
		<button type="button" class="btn btn--link" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-mobile-alt"></i></button>

		<!-- Modal -->
		<div class="modal fade site" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content text-center">
					<div class="modal-header">
						<h5 class="site__title site__title--small mb-0" id="exampleModalLabel">#GoMobile</h5>
						<p>Escanea con tu cel y mira esta página mobile.</p>
						<button type="button" class="btn btn--link btn--close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img class="img--block" src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=<?php echo $actual_link; ?>&choe=UTF-8" alt="QR code">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
