<?php
/**
 * The template for displaying a single about service

 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */
$size = "full";

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>



    $content_strategy = get_field('content_strategy');
	$image_1 = get_field('image_1');
	 ?>



    <article class="About Service">

        <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>

			<div class="about-services-image">
                <?php if($image_1) { ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						<?php } ?>





			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
