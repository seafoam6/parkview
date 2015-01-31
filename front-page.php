<?php
/**
 * The template for displaying the Home page.
 *
 *
 * @package parkview
 */

get_header(); ?>
	<div class="hero">
	<div class="slides">

	<?php 
	$tery = bloginfo('template_directory');
	$slide1=of_get_option('slide1', 'no entry');

	if (of_get_option('slide1', 'no entry') != ""){
		echo "<div class=\"slide slide-1\" style=\"background-image:url(".
			$tery
			."/images/logo-trans.png), url(".$slide1 
			.");\"></div>";
	}
	if (of_get_option('slide2', 'no entry') != ""){
		echo "<div class=\"slide slide-2\" style=\"background-image: url(<?php echo of_get_option('slide2', 'no entry'); ?>);\"></div>";
	}
	if (of_get_option('slide3', 'no entry') != ""){
		echo "<div class=\"slide slide-3\" style=\"background-image: url(<?php echo of_get_option('slide3', 'no entry'); ?>);\"></div>";
	}
	if (of_get_option('slide4', 'no entry') != ""){
		echo "<div class=\"slide slide-4\" style=\"background-image: url(<?php echo of_get_option('slide4', 'no entry'); ?>);\"></div>";
	}

	?></div>
	  <div class="issue-number"></div>
	  <div class="availablity">Available Now</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="about" class="about">
		    <h2 class="section-head">About</h2>
		    <?php echo of_get_option('parkview_about_text', 'no entry'); ?>
		  </section>
		  <section id="issues">
		    <h2 class="section-head">Issues</h2>
		    <div class="issue">
		      <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/issue-thumb-01.jpg" alt="buy parkview issue 1 here">
					</a>
		    </div>
		  </section>
		  <section id="contact">
		    <h2 class="section-head">Contact</h2>
		    <div class="contact-info"><span class="name">Ashley K. Parks</span><br><a href="mailto:ashkparks@gmail.com">ashkparks@gmail.com</a>
		  </section>
		  <section id="buy">
		    <h2 class="section-head">Connect with us</h2>
		    <ul class="social-share clearfix">
		    	<li><a class="instagram" href="http://instagram.com/parkviewmag/"></a></li>
		    	<li><a class="facebook" href="http://facebook.com/ParkviewMag"></a></li>
		    	<li><a class="twitter" href="http://twitter.com/ParkviewMag"></a></li>
		    </ul>
		  </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
