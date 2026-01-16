<?php
/**
 *  Template Name: Startpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package New_Base
 */

get_header();
?>

    <div class="date-location">
      <div class="date-time">7 February 2026, 17 Uhr</div>
      <div class="location"><p class="vert-counterclock">here</p> <div><a href="https://westand.net/" target="_blank">westand</a> <br>Westbahnhof 13<br>Braunschweig</div></div>
    </div>

	<main id="main" class="site-main page__site-main">

		<?php
		while ( have_posts() ) :
		
			the_post();

		?>
			
 <header>
	<p>HBK Braunschweig presents</p>
   <div class="logo-image"></div>
</header>

  <section class="lineup">

   <div class="headliner">
    <span class="vert-counterclock">non contest</span>
    <ul>
      <li>Haiyti</li>
      <li>Tintin Patrone</li>
      
    </ul>
	</div>

    <div class="contest">
		 <span class="vert-counterclock">the 4 contest bands</span>
		 <ul>
			<li>Bezugsgruppe: Rainer Rauch</li>
			<li>Die!Landschaft</li>
			<li>Blowjobs are reAl JoBS </li>
			<li>FEUERZANGE</li>
		 </ul>
    </div>
	
	<div class="moderation">
      <span class="vert-counterclock">Moderation</span><p>Don Pedro der Ringsprecher</p>
    </div>

  </section>

  <div class="free-entry">
   <div>Eintritt Frei</div> 
  </div>

  <section class="awards">
    <p>including the annual</p>
    <h2>»EMAA AWARDS«</h2>

   
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/EMAAAlogoGOLD.png" alt="EMAA Awards Logo">

    <p><strong>voting enabled soon!</strong></p>
  </section>

			
<?php 
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
