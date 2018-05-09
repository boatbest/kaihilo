<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seed
 */

get_header(); ?>

<div class="main-header">
	<div class="container">
		<h2 class="main-title"><?php single_post_title(); ?></h2>
	</div>
</div>

<div class="home-section -news">
	<div class="container">
		<h2>Recent News</h2>
		<?php 
			$args = array(
				'post_type' => 'post',
				// 'category_name' => 'news',
				'posts_per_page' => 4
				);
			$the_query = new WP_Query( $args );
		?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php get_template_part( 'template-parts/content', '' ); ?>

		<?php endwhile; wp_reset_postdata(); ?>
	</div><!--container-->
</div><!--home-section-->




<?php get_footer(); ?>
