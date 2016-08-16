<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart_defenses
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="jumbotron">
<div class="jumbo-inner">
<div class="container">
<h2 class="h1">THE BEST WAYS TO PROTECT</h2>
<ul>
 	<li>Yourself</li>
 	<li>People You Love</li>
 	<li>and Your Property</li>
</ul>
</div class="container">

</div>
</div>

<div class="container">
<div style="margin: 100px 0;">

<?php
while ( have_posts() ) : the_post();
	the_content();
endwhile; // End of the loop.
?>

</div>
</div>

<div style="background: #445; color: white;">
	<div class="container">
<div class="row">
<div class="col-sm-8">
<h2>WHY IS SMART Defenses YOUR BEST PROTECTION?</h2>
Besides being dedicated to the well-being of people, the following qualifications enable me to help you be safe and protected.
<ul>
 	<li>2 years as an F.B.I. agent</li>
 	<li>4 years of martial arts training</li>
 	<li>1 year of specialized self-defense training</li>
 	<li>18 years as a security officer</li>
</ul>
<strong>SMART Defenses</strong> is primarily about helping you and the people that are important to you. Years of research and ingenuity have been invested in the development of the unique SMART Defenses program. Retired police officers, military personnel and an expert F.B.I. agent have contributed exceptional knowledge and expertise. As a result, SMART Defenses has the very best of self-defense strategy, technology and martial arts techniques. The following self-defense devices will empower you to be safe from assault, rape, robbery, carjacking and loss of life. May you enjoy a safe, happy, fulfilled life.
<p><em>~Jim</em></p>
</div>
<div class="col-sm-4 text-center"><img class="img-responsive center-block wp-image-116 size-full" src="<?php echo bloginfo('template_directory'); ?>/images/jim-lees.jpg" alt="Jim Lees" /> Jim Lees
</div>
</div>


<div class="row">
  <div class="col-md-6">
    <div class="media">
      <div class="media-body">
        <blockquote>
          <p>"SMART Defenses reveals the very best ways for personal protection. It combines excellent strategy with a unique blend of self-defense technology and simple, effective martial arts."</p>
          <h4 class="h3 media-heading">Kelli Geier,<br /> <small>Retired Police Officer</small></h4>
        </blockquote>
      </div>
      <div class="media-right">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/kelli-geier.jpg" class="media-object" alt="Kelli Geier" width="100" height="auto" />
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="media">
      <div class="media-body">
        <blockquote>
          <p>"I recommend SMART Defenses because it has the best approach to self-defense and being safe!"</p>
          <h4 class="h3 media-heading">LaRon Glover, <br/><small>Retired Police Officer</small></h4>
        </blockquote>
      </div>
      <div class="media-right">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/laron-glover.jpg" class="media-object" alt="Laron Glover" width="100" height="auto">
      </div>
    </div>
  </div>
</div>

</div>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
