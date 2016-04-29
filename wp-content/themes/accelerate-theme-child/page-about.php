<?php
/* This is the template that displays the about page.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

$size = "full";
get_header(); ?>


<!-- Top image with text inside -->
		<section class="hero-about">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-text">
					<h3><?php the_content(); ?></h3>
				</div>
				<?php endwhile; // end of the loop. ?>
		</section> 
    


<div class="site-content">
<!-- section with text and images that belong to the services custom post type -->
    
    <section class="service-section">
        
        <div class="our-services"><h4>OUR SERVICES</h4>
        <p>We take pride in our clients and the content we create for them. 
Here’s a brief overview of our offered services.</p>
        </div>
    
    <?php query_posts("post_type=services&order=asc"); ?>
    <?php while (have_posts() ) : the_post();

$service_text = get_field('service_text');
$image = get_field('image'); ?>

    
    <article class="individual-service">
    <div class="services-icons">
      <?php if($image) {
        echo wp_get_attachment_image( $image, $size );
    } ?>
    </div> <!--.services-icons -->
        
    <div class="services-text">
    <h2><?php the_title(); ?></h2>
    <p><?php echo $service_text; ?></p>
    </div>    
    </article>    
        <?php endwhile; // end of the loop. 
        wp_reset_query(); ?>
        
    </section> <!--.service-section -->
 

    
<section class="work-with-us">
<div class="interested">
    <h3>Interested in working with us?</h3>
</div>

<div class="button">
   <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
</div>
</section><!-- end of work with us section -->

</div><!-- site-content -->


<?php get_footer(); ?>
