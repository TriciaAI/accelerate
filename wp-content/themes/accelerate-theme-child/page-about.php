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
    
    <?php query_posts("post_type=services&order=asc"); ?>
    <?php while (have_posts() ) : the_post();

$service_text = get_field('service_text');
$icon = get_field('icon'); ?>

    <h2><?php the_title(); ?></h2>
    <p><?php echo $service_text; ?></p>
    
    <div class="services-icons">
      <?php if($icon) {
        echo wp_get_attachment_image( $icon, $size );
    } ?>
    
    </div> <!--.services-icons -->
        
        
        <?php endwhile; // end of the loop. 
        wp_reset_query(); ?>
        
    </section> <!--.service-section -->


</div><!--site-content -->

    
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
