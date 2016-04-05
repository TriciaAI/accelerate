<?php
/**
 * The template for displaying the About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.1
 */

get_header(); ?>

<section class="home-page">
<div class="site-content">
   
    <?php while ( have_posts() ) : the_post(); ?>
<div class='homepage-hero'>
    <div class="text">
        <p></p><span class="accelerate">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
    </div>
</div>
    <?php endwhile; // end of the loop. ?>

    </div><!-- .container -->
</section><!-- .home-page -->
    


<div class="site-content">
    
<section class="our-services">
    <h3>OUR SERVICES</h3>
    <p> We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
    <?php while ( have_posts() ) : the_post(); ?><!--beginning of the loop-->
</section>      
    <br>


<section class="content-strategy">
<div class="image_1"><img src="">
</div>
        <h4>Content Strategy</h4>
        <p>"How shall we get down?" asked Dorothy. They found the ladder so heavy they could not pull it up, so the Scarecrow fell off the wall and the others jumped down upon him so that the hard floor would not hurt their feet. Of course they took pains not to light on his head and get the pins in their feet.</p>
</section>
    <br>
    
    
<section class="influencer-mapping">
<div class="image_2"><img src="">
</div>
        <h4>Influencer Mapping</h4>
        <p>"How shall we get down?" asked Dorothy. They found the ladder so heavy they could not pull it up, so the Scarecrow fell off the wall and the others jumped down upon him so that the hard floor would not hurt their feet. Of course they took pains not to light on his head and get the pins in their feet.</p>
</section>
<br>        
    
<section class="social-madia-strategy">
<div class="image_3"><img src="">
</div>
        <h4>Social Media Strategy</h4>
        <p>"How shall we get down?" asked Dorothy. They found the ladder so heavy they could not pull it up, so the Scarecrow fell off the wall and the others jumped down upon him so that the hard floor would not hurt their feet. Of course they took pains not to light on his head and get the pins in their feet.</p>
</section>
<br>        
    
<section class="design-development">
<div class="image_4"><img src="">
</div>
        <h4>Design and Development</h4>
        <p>"How shall we get down?" asked Dorothy. They found the ladder so heavy they could not pull it up, so the Scarecrow fell off the wall and the others jumped down upon him so that the hard floor would not hurt their feet. Of course they took pains not to light on his head and get the pins in their feet.</p>
</section>
        
    
<section class="work-with-us">
<div class="interested">
    <h3>Interested in working with us?</h3>
    <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
    
    </div>
</section>   
       
    <?php endwhile; ?><!--end of the loop-->

		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>
