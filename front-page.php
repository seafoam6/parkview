<?php
/**
 * The template for displaying the Home page.
 *
 *
 * @package parkview
 */

get_header(); ?>
	<div class="hero">
	  <div class="issue-number"></div>
	  <div class="availablity">Available Now</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="about" class="about">
		    <h2 class="section-head">About</h2>
		    <img class="leaf-flourish" src="leaf.png">
		    <p><span class="namesake">PARKVIEW MAGAZINE</span> is a collection of life’s allure through a showcase of design, entertaining, awesome and inspiring people, shared experiences, and spaces. We capture how individual taste is cultivated through living and common spaces and encourage sharing life’s profound moments in them. Not so much of a keeping up with the trends type of read, but more of a cultured visual and reading experience that embraces and influences a lifestyle, <span class="namesake">PARKVIEW MAGAZINE</span> is a reference for inspiration and cunning perspective on external environments. Our dialogue with some of the most intriguing human beings around, in some of the most aesthetically and functionally pleasing areas we can find, <span class="namesake">PARKVIEW MAGAZINE</span> is captivating in its own right, submerging the reader into the glory of each page.</p>
		  </section>
		  <section>
		    <h2 class="section-head">Issues</h2>
		    <div class="issue">
		      <img src="cover1.jpg">
		      <div class="issue-desc">
		        <span class="date">January 2015</span>
		        <span class="buyit">Buy It Here</span>
		      </div>
		    </div>
		  </section>
		  <section>
		    <h2 class="section-head">Contact</h2>
		    <div class="contact-info">Ashley K. Parks<br><a href="mailto:ashkparks@gmail.com">ashkparks@gmail.com</a>
		  </section>
		  <section>
		    <h2 class="section-head">Connect with us</h2>
		    <ul class="social-share"></ul>
		  </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
