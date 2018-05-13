<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seed
 */

get_header(); ?>
<div class="main-header-title">
 <div class="container">

 </div>
</div>
<div class="container">
  <div class="row">

    <div class="col-12">
      <?php

      foreach (get_the_category() as $category) {
          $slugname =  $category->slug .'';
          $catname = $category->name .'';
      }


      ?>


        <a href="/kaihilo" class="text-grey"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a> /<a href="/kaihilo/รายการสินค้า" class="text-grey"><label class="text-lightgrey"> สินค้า </label></a> /
        <a href="/kaihilo/category/<?php echo $slugname ?>" class="text-grey"><label class="text-lightgrey"> <?php echo $catname; ?></label></a> / <label><?php the_title(); ?></label>
    </div>


    <div class="col-lg-3 col-md-12 mb-md-5 mb-5">
      <h2 class="header-title"><?php the_title(); ?></h2>
      <div class="line-title enlarge"></div>


      <?php
      $taxonomy = 'category';
      $terms = get_terms($taxonomy);
      if ( $terms && !is_wp_error( $terms ) ) :
      ?>


              <?php foreach ( $terms as $term ) {
                      if($term->name != 'ไม่มีหมวดหมู่'){
              ?>
                        <a class="category-items-text" href="<?php echo get_term_link($term->slug, $taxonomy); ?>">
                          <div class="category-items">
                            <?php echo $term->name; ?>
                          </div>
                        </a>
                <?php }
              }?>


      <?php endif;
      ?>

    </div>

    <div class="col-lg-9 col-md-12">
      <div class="row">

        <div class="col-12 col-md-6">
          <div class="product-pic">

            <?php
            if(have_posts()): while(have_posts()): the_post();

            the_post_thumbnail('full');
            ?>



          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="title-product">
            <h3 class="mb-3"><?php the_title(); ?></h3>
          </div>
          <div class="details-product">

            <?php

             echo $post->post_content;

             endwhile; endif;
            ?>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 mb-3">
          <h4 class="header-title">รายการสินค้าอิ่นๆที่เกั่ยวข้อง</h4>
          <div class="line-title"></div>
        </div>
        <div class="col-12">
          <div class="owl-carousel owl-theme">
            <?php




                $args = array(
                  'post_type' => 'product',
                  'category_name' => $slugname,
                  'orderby' => 'ID',
                  'order' => 'rand',
                  'posts_per_page ' => 16,
                  );
                $the_query = new WP_Query( $args );
              ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="item">

                    <div class="card">
                      <div class="product-card">
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                      <div class="card-body mt-2">
                        <h4 class="card-title"><?php echo get_the_title(); ?></h4>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow">สั่งซื้อ</a>
                      </div>
                    </div>

               </div>


            <?php endwhile; wp_reset_postdata(); ?>


          </div>
        </div>
      </div>
    </div>
  </div>

</div><!--container-->
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
