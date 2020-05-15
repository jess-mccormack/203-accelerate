<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

  <div id="primary" class="services-hero">
    <div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
            <h1>Accelerate is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br>making their customers smile.</h1>
      <?php endwhile; // end of the loop. ?>
    </div><!-- .main-content -->
  </div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

  <?php while ( have_posts() ) : the_post();
      $service_icon_1 = get_field('service_icon_1');
      $service_title_1 = get_field('service_title_1');
      $service_description_1 = get_field('service_description_1');

      $service_icon_2 = get_field('service_icon_2');
      $service_title_2 = get_field('service_title_2');
      $service_description_2 = get_field('service_description_2');

      $service_icon_3 = get_field('service_icon_3');
      $service_title_3 = get_field('service_title_3');
      $service_description_3 = get_field('service_description_3');

      $service_icon_4 = get_field('service_icon_4');
      $service_title_4 = get_field('service_title_4');
      $service_description_4 = get_field('service_description_4');

      $service_icon_5 = get_field('service_icon_5');
      $service_title_5 = get_field('service_title_5');
      $service_description_5 = get_field('service_description_5'); ?>


      <div class="page-title">
            <h2><?php the_title(); ?></h2>
    				<p><?php the_content(); ?></p>
      </div> <!-- end page title -->

      <div class="our-services">

            <!-- service 1 -->

            <div class="service-icon-odd" id="service_icon_1">
                <img src="<?php echo $service_icon_1; ?>" />
            </div>

            <div class="service-description-odd" id="service_1">
                <h1><?php echo $service_title_1; ?></h1>
                <p><?php echo $service_description_1; ?></p>
            </div>

            <!-- service 2 -->

            <div class="service-description-even" id="service_2">
                <h1><?php echo $service_title_2; ?></h1>
                <p><?php echo $service_description_2; ?></p>
            </div>

            <div class="service-icon-even" id="service_icon_2">
                <img src="<?php echo $service_icon_2; ?>" />
            </div>

            <!-- service 3 -->

            <div class="service-icon-odd" id="service_icon_3">
                <img src="<?php echo $service_icon_3; ?>" />
            </div>

            <div class="service-description-odd" id="service_3">
                <h1><?php echo $service_title_3; ?></h1>
                <p><?php echo $service_description_3; ?></p>
            </div>

            <!-- service 4 -->

            <div class="service-description-even" id="service_4">
                <h1><?php echo $service_title_4; ?></h1>
                <p><?php echo $service_description_4; ?></p>
            </div>

            <div class="service-icon-even" id="service_icon_4">
                <img src="<?php echo $service_icon_4; ?>" />
            </div>

            <!-- service 5 -->

            <div class="service-icon-odd" id="service_icon_5">
                <img src="<?php echo $service_icon_5; ?>" />
            </div>

            <div class="service-description-odd" id="service_5">
                <h1><?php echo $service_title_5; ?></h1>
                <p><?php echo $service_description_5; ?></p>
            </div>

      </div>  <!-- end our services -->

      <div class="contact-callout">
          <h3>Interested in working with us?</h3>
          <div class="services-button"><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
      </div>

  <?php endwhile; // end of the loop. ?>

    </div>
  </div>


<?php get_footer(); ?>
