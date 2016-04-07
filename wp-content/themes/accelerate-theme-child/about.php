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

<?php while ( have_posts() ) : the_post();
				$our_services = get_field('our_services');
				$services = get_field('services');
				$content_strategy = get_field('content_strategy');
				$content = get_field('content_strategy_text');
				$content_image = get_field('icon_1');
				$influencer_mapping = get_field('influencer_mapping'); 
				$influencer = get_field('influencer'); 
				$influencer_image = get_field('icon_2'); 
				$social_media_strategy = get_field('social_media_strategy'); 
				$social = get_field('social'); 
				$social_image = get_field('social_image'); 
				$design_and_development = get_field('design_and_development'); 
				$design = get_field('design'); 
				$design_image = get_field('design_image');
				$interested = get_field('interested');
				$contact_us = get_field('contact_us');
				$size = "medium"; ?>
				
				<article class="about">
					<div class="services_header">
						<h6><?php echo $our_services; ?></h6>
						<p><?php echo $services; ?></p>
					</div>
					
					<aside class="left-image">
						<?php echo wp_get_attachment_image($content_image, $size); ?>
					</aside>
					
					<aside class="right-text">
						<h4><?php echo $content_strategy; ?></h4>
						<p><?php echo $content; ?></p>
					</aside>
					
					<aside class="left-text">
						<h4><?php echo $influencer_mapping; ?></h4>
						<p><?php echo $influencer; ?></p>
					</aside>
					
					<aside class="right-image">
						<?php echo wp_get_attachment_image($influencer_image, $size); ?>
					</aside>

					<aside class="left-image">
						<?php echo wp_get_attachment_image($social_image, $size); ?>
					</aside>
					
					<aside class="right-text">
						<h4><?php echo $social_media_strategy; ?></h4>
						<p><?php echo $social; ?></p>
					</aside>
						
					<aside class="left-text">
						<h4><?php echo $design_and_development; ?></h4>
						<p><?php echo $design; ?></p>
					</aside>
					
					<aside class="right-image">
						<?php echo wp_get_attachment_image($design_image, $size); ?>
					</aside>
					
					<hr></hr>
					
					<aside class="interested bottom">
						<h2><?php echo $interested; ?></h2>
					</aside>
					
					<aside class="contact-btn bottom">
						<h2><?php echo $contact_us; ?></h2>
					</aside>
										
				</article>
			<?php endwhile; // end of the loop. ?>
			
<?php endwhile; // end of the loop. ?>


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
