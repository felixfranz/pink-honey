<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Base
 */

?>


</div><!-- #page -->
	<footer class="site-footer page__site-footer">
		
			
			<a href="#" class="imprint-link" id="toggleBtn">Imprint & Contact & Privacy</a>
			<div id="imprint-box">
				<h3>Impressum</h3>
				<p>Hochschule für Bildende Künste Braunschweig<br>
Johannes-Selenka-Platz 1<br>
38118 Braunschweig<br>
<br>
Kontakt<br>
Telefon: +49 (531) 391 91 22<br>
Telefax: +49 (531) 391 93 07<br>
E-Mail: <a href="mailto:info.hbk@lists.hbk-bs.de">info.hbk@lists.hbk-bs.de</a>
				</p>
			</div>
			
			<div>
				
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/RZ_VWS_Zukunft-Niedersachsen_Logo_Schwarz_RGB.png" alt="HBK Logo">
			<a href="https://www.hbk-bs.de/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/hbk-logo_pfade.png" alt="HBK Logo"></a>
		
			
			</div>
	</footer><!-- #colophon -->

<!-- NAV TOGGLE AND PAGE OVERLAY TO AVOID SCREENREADERS ON TOP -->
<a class="nav-toggle" href="#"> 
	MENU<span></span>
</a>

<div class="page-overlay">
	<div class="page-overlay__container wrap">

			<nav class="mobile-menu page-overlay__mobile-menu">

				<?php wp_nav_menu(array(
							'container' => false,                           // remove nav container

							'menu_class' => 'menu page-overlay__menu menu__mobile_menu',               // adding custom nav class
							'theme_location' => 'menu-1',                                // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
				)); ?>

			</nav>
			
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
