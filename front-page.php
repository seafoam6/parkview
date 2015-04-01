<?php
/**
 * The template for displaying the Home page.
 *
 *
 * @package parkview
 */

get_header(); ?>
	<div class="hero">
	<div class="slides" data-slidetime="<?php echo get_option('parkview_slideTimer'); ?>">

	<?php 
	for ($i = 1; $i <= 5; $i++){
		if (get_option('parkview_banner'.$i) != ""){
			echo "<div class=\"slide slide-".$i."\" style=\"background-image:url(".get_option('parkview_banner'.$i).");\"></div>";
		}
	}

	


?>
</div><!--slides-->

	  <div class="issue-number"></div>
	  <div class="availablity">Available Now</div>
	  <div class="name-wrap">
	  	<img src="<?php bloginfo('template_directory');?>/images/logo-trans.png">
	  	</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="about" class="about">
		    <h2 class="section-head">About</h2>
		    		    <img class="leaf-flourish" src="<?php bloginfo('template_directory');?>/images/copy-florish.jpg">
		    <p><?php echo get_option('parkview_homePageText'); ?></p>
		  </section>
		  <section id="issues">
		    <h2 class="section-head">Issues</h2>
				<?php
					//set find parameters
					$params = array( 'limit' => -1 );
					//get pods object
					$pods = pods( 'issue', $params );
					//loop through records
					if ( $pods->total() > 0 ) {
					while ( $pods->fetch() ) {
					//Put field values into variables
					$title = $pods->display('name');
					$picture = $pods->field('issue_thumbnail');
					$issue_link = $pods->field('link_to_issue_file');
					$id = $pods->field('id');
				?>
				<?php if ( ! is_null($picture) ) : ?>
					<div class="issue">
					<a href="<?php echo $issue_link; ?>">
						<?php echo wp_get_attachment_image( $picture['ID'], 'full' ); ?>
					</a>
					</div>		 
				<?php else : ?>
				<?php endif; ?>
				<?php
				} //endwhile
				} //endif

				?>
		  </section>
		  <section id="contact">
		    <h2 class="section-head">Contact</h2>
		    <div class="contact-info"><a class="contact-email" href="mailto:info@gmail.com">info@gmail.com</a>
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
