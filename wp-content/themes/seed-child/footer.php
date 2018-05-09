<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */
?>
</div><!--site-content-->

<?php if (is_active_sidebar( 'footbar' ) ) : ?>
	<aside id="footbar" class="site-footbar" role="complementary">
		<div class="container">
			<?php dynamic_sidebar( 'footbar' ); ?>
		</div>
	</aside><!--site-footbar-->

<?php else: ?>
	<div class="site-footer-space"></div>
	<footer id="colophon" class="" role="contentinfo">

		<div class="footer-border">
		</div>

		<div class="top-footer">
			<div class="site-info">
			   <div class="container">
					<div class="row">
							<div class="col-md-5 col-12" style="text-align:left;">
								<h3>ติดต่อเรา</h3>
								<div class="row">
									<div class="col-2 col-lg-1 pr-3">
										<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
									</div>
									<div class="col-10 col-lg-11">
										<p class="">8/8หมู่ 4 ซอย เทศบาล 19 ถนนบางกรวย-ไทยน้อย ตำบลโสนลอย 
										อำเภอ บางบัวทอง จังหวัดนนทบุรี 11110</p>
									</div>
									<div class="col-2 col-lg-1 pr-3">
										<i class="fa fa-phone fa-lg" aria-hidden="true"></i>
									</div>
									<div class="col-10 col-lg-11">
										<p class="">083-556-2244,094-555-6665</p>
									</div>
									<div class="col-2 col-lg-1 pr-3">
										<i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
									</div>
									<div class="col-10 col-lg-11">
										<p class="">example@mail.com</p>
									</div>
								</div>
								
							</div>

							<div class="col-md-4  col-12" style="text-align: left;">
								<h3>Tags</h3>
								<?php wp_tag_cloud( array(
									 'smallest' => 11, // size of least used tag
									 'largest'  => 16, // size of most used tag
									 'unit'     => 'px', // unit for sizing the tags
									 'number'   => 10, // displays at most 45 tags
									 'orderby'  => 'name', // order tags alphabetically
									 'order'    => 'ASC', // order tags by ascending order
									 'taxonomy' => 'post_tag' // you can even make tags for custom taxonomies
								) ); ?>
							</div>

							<div class="col-md-3 col-12">
								<div class="contact-qr-line mx-auto">
							  		<img src="http://localhost/kaihilo/wp-content/uploads/2018/05/ดาวน์โหลด.png" alt="Image" />
							  	</div>
							</div>
					</div>
				</div>
		   </div>
		</div>

		<div class="bottom-footer">
			<div class="container">
				<div class="site-info">
					Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
				</div><!--site-info-->
			</div><!--container-->
		</div>
	</footer><!--site-footer-->

<?php endif; ?>

</div><!--site-canvas-->
</div><!--#page-->

<?php wp_footer(); ?>

</body>
</html>
