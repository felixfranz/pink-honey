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

	<main id="main" class="site-main page__site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			?>
			
			
    <div class="date-location">
      7 February 2026 · 17 h<br>
      Westand · Westbahnhof 13 · Braunschweig
    </div>

 <header>
    <h1>
      PINK HONEY FESTIVAL
    </h1>
  </header>

  <section class="lineup">

     <span class="vert-counterclock">outside of contest</span>
    <ul class="headliner">
      <li>Tintin Patrone</li>
      <li>Die Apotheke</li>
    </ul>

    <div class="contest">
		 <span class="vert-counterclock"></span>
      <p>Bezugsgruppe: Rainer Rauch</p>
      <p>Die!Landschaft ·</p> <p>plowjobs are realjobs </p><p> FFUERZANGE</p>
      <p><strong>Moderation:</strong> Miguel Alias Name</p>
    </div>
	  <div class="moderation">
      <span class="vert-counterclock">Moderation</span><p> Miguel Alias Name</p>
    </div>
  </section>

  <div class="free-entry">
    Eintritt Frei
  </div>

  <section class="awards">
    <p>including the annual</p>
    <h2>EMAA AWARDS</h2>

    <!-- Replace with your real logo -->
    <img src="layout-website.png" alt="EMAA Awards Logo Placeholder">

    <p><strong>Vote soon!</strong></p>
  </section>

			
<?php 
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
