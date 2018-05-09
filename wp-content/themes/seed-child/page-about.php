<?php
/**
 * Template Name: About Page
 */
get_header();?>

<body <?php body_class('about-page'); ?>>
	<div class="main-header-title">
		<div class="container">
			<h2 class="header-title"><?php the_title(); ?></h2>
			<div class="line-title"></div>
		</div>
	</div>

	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main -hide-title" role="main">

				<?php
					$args = array(
						'post_type' => 'about',
						'orderby' => 'ID',
						'order' => 'ASC'
						);
					$the_query = new WP_Query( $args );
				?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php echo get_the_content(); ?>
				<?php endwhile; wp_reset_postdata(); ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!--container-->
<?php get_footer(); ?>
</body>
</html>
