<?php
/**
 * Template Name: Product Page
 */
 get_header();?>

 <body>
 	<div class="main-header">
 		<div class="container">

 		</div>
 	</div>

 	<div class="container">




      <div class="row">
        <div class="col-12">
            <a href="/kaihilo" class="text-grey"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a> / <label class="text-lightgrey">สินค้า</label>
        </div>
        <div class="col-lg-3">
          <h2 class="header-title"><?php the_title(); ?></h2>
          <div class="line-title enlarge"></div>


          <?php
          $taxonomy = 'category';
          $terms = get_terms($taxonomy);
          if ( $terms && !is_wp_error( $terms ) ) :
          ?>


                  <?php foreach ( $terms as $term ) { ?>
                    <a class="category-items-text" href="<?php echo get_term_link($term->slug, $taxonomy); ?>">
                      <div class="category-items">
                        <?php echo $term->name; ?>
                      </div>
                      </a>
                  <?php } ?>


          <?php endif;
          ?>

        </div>
        <div class="col-lg-9">
          <h1 class="header-title"><?php the_title(); ?></h1>

            <div class="row mx-0">


              <?php
                $args = array(
                  'post_type' => 'product',
                  'orderby' => 'ID',
                  'order' => 'ASC',
                  'posts_per_page ' => 16,
                  );
                $the_query = new WP_Query( $args );
              ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>


              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>

              <div class="col-lg-3 col-md-4 col-6 px-1 mb-5">

                <div class="card">
                  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                    <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

              </div>


            <?php endwhile; wp_reset_postdata(); ?>





            </div>

        </div>
      </div>


 	</div><!--container-->
 <?php get_footer(); ?>

</body>
</html>
