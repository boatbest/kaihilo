<?php
/**
 * Template Name: Article Page
 */
get_header();?>

<body <?php body_class('article-page'); ?>>
	<div class="main-header-title">
		<div class="container">
			<h2 class="header-title"><?php the_title(); ?></h2>
			<div class="line-title"></div>
		</div>
	</div>

	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main -hide-title" role="main">
				<div class="row">



					<?php

						$args = array(
							'post_type' => 'article',
							'orderby' => 'ID',
							'order' => 'ASC',
							);
						$the_query = new WP_Query( $args );
					?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


					<div class="col-lg-4 col-md-6  col-12 mb-5">
						<div class="card">
							<a href="<?php echo get_permalink(); ?>">
								<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
							</a>
							<div class="card-body mt-2">
								<a href="<?php echo get_permalink(); ?>">
									<h3 class="card-title text-left"><?php echo get_the_title(); ?></h3>
								</a>
								<p class="card-text text-left"><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
					</div>




				<?php endwhile; wp_reset_postdata(); ?>


				</div>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!--container-->
<?php get_footer(); ?>
</body>
</html>
