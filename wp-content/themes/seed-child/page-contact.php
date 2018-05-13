<?php
/**
 * Template Name: Contact Page
 */
 get_header();?>

 <body <?php body_class('contact-page'); ?>>
   <div class="main-header-title">
 		<div class="container">
 			<h2 class="header-title"><?php the_title(); ?></h2>
 			<div class="line-title"></div>
 		</div>
 	</div>

 	<div class="container">
    <?php
			$args = array(
				'post_type' => 'contact_us',
				'p' => 71
				);
			$the_query = new WP_Query( $args );
		?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

 		<div id="primary" class="content-area">
 			<main id="main" class="site-main -hide-title" role="main">
        <div class="row">
    			<div class="col-12 col-md-6">
    				<div class="d-flex flex-row">
                <div class="p-2 contact-qr-line">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Image" class="img-responsive"/>
                </div>
    				  	<div class="p-2 contact-info">
    						    <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p><?php $key="address"; echo get_post_meta($post->ID, $key, true); ?></p>
		                  </div>
		                </div>

		                <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-phone fa-lg" aria-hidden="true"></i></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p x-ms-format-detection="none"><?php $key="phone"; echo get_post_meta($post->ID, $key, true); ?></p>
		                  </div>
		                </div>

		                <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p><?php $key="email"; echo get_post_meta($post->ID, $key, true); ?></p>
		                  </div>
		                </div>
    				  	</div>
    				</div>
    				<div class="np-google-map">
    			  			<?php the_content(); ?>
    			  	</div>
    			</div>
          <div class="col-12 col-md-6">
            <?php echo do_shortcode( '[caldera_form id="CF5af04035e6815"]' ); ?>
          </div>
        </div>

 			</main><!-- #main -->
 		</div><!-- #primary -->
    		<?php endwhile; wp_reset_postdata(); ?>
 	</div><!--container-->

 <?php get_footer(); ?>

</body>
</html>
