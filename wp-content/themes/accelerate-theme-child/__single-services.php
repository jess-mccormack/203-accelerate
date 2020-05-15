<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
$size = "medium";

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">


<?php while ( have_posts() ) : the_post();

	$icon = get_field('icon'); ?>

	<article class="services">
			<div class="service">

					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>

			</div>
			<div class="icon">

					<?php echo wp_get_attachment_image($icon, $size); ?>
			</div>
	</article>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
