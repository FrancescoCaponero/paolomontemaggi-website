<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paolomontemaggi-theme
 */


?>

		<footer>
			<div class="footer-wrapper">
				<div class="footerwrap-first">
					<h1 class="footer-h1-name">PAOLO MONTEMAGGI</h1>
					<h2 class="footer-h2-number">+39 77777777</h2>
					<h2 class="footer-h2-email">paolomontemaggi@mail.it</h2>
					<div class="social-bar-wrap">
						<ul class="social-bar-ul">
							<li class="social-ig-li">
								<a href="#">
								<img class="icons" src="<?php echo get_template_directory_uri(); ?>/social-icons/Instagram.png">
								</a>
							</li>
							<li class="social-twitter-li">
								<a href="#">
								<img class="icons" src="<?php echo get_template_directory_uri(); ?>/social-icons/Twitter.png">
								</a>
							</li>
							<li class="social-fb-li">
								<a href="#">
								<img class="icons" src="<?php echo get_template_directory_uri(); ?>/social-icons/Facebook.png">
								</a>
							</li>
							<li class="social-web-li">
								<a href="#">
								<img class="icons" src="<?php echo get_template_directory_uri(); ?>/social-icons/web.png">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footerwrap-second">
					<div class="other-contact">
						<h2 class="footerwrap-second-h2">contatto 1</h2>
						<h3 class="footerwrap-second-content">lorem lorem</h3>
						<h3 class="footerwrap-second-content">lorem lorem lorem</h3>
					</div>
					<h2 class="footerwrap-second-content">Design e realizzazione del sito:</br><a href="#"> Francesco Caponero</a></h2>
				</div>
			</div>
			<div class="copyright-footer-bar">
				<p>Copyright © <span class="copyright-year-number"></span> Tutti i diritti sono riservati | Dottor Paolo Montemaggi | P. IVA 0777777777</p>
			</div>
		</footer>
	</div><!-- #page -->
</div> <!-- body-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
