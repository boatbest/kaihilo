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

 		<div id="primary" class="content-area">
 			<main id="main" class="site-main -hide-title" role="main">
        <div class="row">
    			<div class="col-12 col-md-6">
    				<div class="d-flex flex-row">
                <div class="p-2 contact-qr-line">
                  <img src="http://localhost/kaihilo/wp-content/uploads/2018/05/ดาวน์โหลด.png" alt="Image" class="img-responsive"/>
                </div>
    				  	<div class="p-2 contact-info">
    						    <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p>22/2 ถนนกัลปพฤกษ์ เขตจอมทอง แขวงบางขุนเทียน กรุงเทพมหานคร 10150</p>
		                  </div>
		                </div>

		                <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-phone fa-lg" aria-hidden="true"></i></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p x-ms-format-detection="none">083-5566332 (LINE: 0835566332)</p>
		                  </div>
		                </div>

		                <div class="row">
		                  <div class="col-1 col-md-1">
		                    <span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
		                  </div>
		                  <div class="col-11 col-md-11">
		                    <p>example@mail.com</p>
		                  </div>
		                </div>
    				  	</div>
    				</div>
    				<div class="np-google-map">
    			  		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3874.3052976735103!2d100.52398685!3d13.82069735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b8122c92379%3A0xc362341a28823736!2zSmFjayZEZWEgU3RvcmUg4LiV4Lil4Liy4LiU4Liq4Lii4Liy4Lih4Lii4Li04Lib4LiL4Li1!5e0!3m2!1sth!2sth!4v1525698253473" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    			  	</div>
    			</div>
          <div class="col-12 col-md-6">
            <?php echo do_shortcode( '[caldera_form id="CF5af04035e6815"]' ); ?>
          </div>
        </div>

 			</main><!-- #main -->
 		</div><!-- #primary -->
 	</div><!--container-->

 <?php get_footer(); ?>

</body>
</html>
