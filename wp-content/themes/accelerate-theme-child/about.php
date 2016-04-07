<?php
/* Template Name: About page

 *
 * This is the template that displays the about page.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

$size = "full";
get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>

				<h2><span class="accelerate">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>

	</div><!-- .container -->
</section><!-- .home-page -->

<div><!--.content -->




<section class="work-with-us">
<div class="interested">
    <h3>Interested in working with us?</h3>
</div>

<div class="button">
   <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
</div>
</section>

</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>
