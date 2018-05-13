<?php get_header(); ?>

<main id="main" class="site-main" role="main">
<div class="container">
	<div class="banner-background">
		<img src="http://localhost/kaihilo/wp-content/uploads/2018/05/img.jpg" class="img-responsive" alt="" itemprop="logo">
	</div>
</div>

<div class="content-section section">
	<div class="title-section text-center">
		<hr class="top-line-title">
		<h2 class="title-section">ขายลูกเต๋า อุปกรณ์ไฮโลทุกชนิด</h2>
	</div>
	<div class="title-description-section">
		<p class="title-description">ขายลูกเต๋าไฮโล น้ำเต้าปูปลา ร้านใหญ่ที่สุด ผู้ผลิตรายใหญ่</p>
	</div>
</div>

<div class="productt-section section">
	<div class="container">
		<div class="row">

			<?php
			$taxonomy = 'category';
			$terms = get_terms($taxonomy);
			if ( $terms && !is_wp_error( $terms ) ) :
			?>
							<?php foreach ( $terms as $term ) {
								if($term->name != "ไม่มีหมวดหมู่")
								{
									?>

									<div class="col-12">

										<h2 class="head-title"><?php echo $term->name ?></h2>
											<div class="line-title enlarge"></div>

					          <div class="owl-carousel owl-theme my-4">
					            <?php



										                $args = array(
										                  'post_type' => 'product',
										                  'category_name' => $term->slug,
										                  'orderby' => 'ID',
										                  'order' => 'asc',
										                  'posts_per_page ' => 16,
										                  );
										                $the_query = new WP_Query( $args );
										              ?>

										              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										                <div class="item">

										                    <div class="card">
																					<div class="cat-front">

											                      <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">

																					</div>
																					<div class="card-body mt-2">
										                        <h4 class="card-title"><?php echo get_the_title(); ?></h4>
										                        <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow">สั่งซื้อ</a>
										                      </div>
										                    </div>

										               </div>

										            <?php endwhile; wp_reset_postdata();

														?>

					          </div>
					        </div>
									<?php
								}
							}?>
			<?php endif;
			?>


		</div>




	</div>
</div>




</main><!--.site-main-->

<?php get_footer(); ?>



<script>

jQuery(document).ready(function ($) {

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items: 2,
        responsiveClass:true,
        responsive:{
            414:{
                items:2
            },
            768:{
                items:3
            },
            1024:{
                items:4
            }
        }
    })
})


</script>
