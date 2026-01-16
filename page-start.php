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
      <div class="date-time">7 February 2026, 17h</div>
      <div class="location"><p class="vert-counterclock">here</p> <div><a href="#">Westand</a> <br>Westbahnhof 13<br>Braunschweig</div></div>
    </div>

	<main id="main" class="site-main page__site-main">

		<?php
		while ( have_posts() ) :
		
			the_post();

		?>
			
 <header>
	<p>presented by HBK Braunschweig</p>
   <div class="logo-image"></div>
</header>

  <section class="lineup">

   <div class="headliner">
    <span class="vert-counterclock">outside of contest</span>
    <ul>
      <li>Tintin Patrone</li>
      <li>Haiyti</li>
    </ul>
	</div>

    <div class="contest">
		 <span class="vert-counterclock">the 4 contest bands</span>
		 <ul>
			<li>Bezugsgruppe: Rainer Rauch</li>
			<li>Die!Landschaft</li>
			<li>blowjobs are realjobs </li>
			<li>FEUERZANGE</li>
		 </ul>
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
    <h2>»EMAA AWARDS«</h2>

   
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/EMAAAlogoGOLD.png" alt="EMAA Awards Logo">

    <p><strong>Vote soon!</strong></p>
  </section>

			
<?php 
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
