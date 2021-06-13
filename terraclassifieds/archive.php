<?php 

wp_enqueue_script('cmb2-scripts-js-extra');


get_header(); 
$currency = terraclassifieds_get_option( '_tc_advert_currency', '$' );
$unit_position = terraclassifieds_get_option( '_tc_unit_position', 1 );
$text_limit = terraclassifieds_get_option( '_tc_category_view_text_limit', '10' );
$add_to_favourites = terraclassifieds_get_option( '_tc_category_view_add_to_favourites', 0 );
$use_locations = terraclassifieds_get_option( '_tc_use_locations', 1 );
$show_location = terraclassifieds_get_option( '_tc_show_location', 1 );
$use_types = terraclassifieds_get_option( '_tc_use_types', 0 );
$use_selling_types = terraclassifieds_get_option( '_tc_use_selling_types', 1 );
$show_hits = terraclassifieds_get_option( '_tc_hits', 0 );
$show_author = terraclassifieds_get_option( '_tc_category_view_ad_author', 1 );
$no_image = terraclassifieds_get_option( '_tc_image_no_image', 0 );
if(!empty($no_image)){
    $no_image_id = attachment_url_to_postid($no_image);
}
$use_images = terraclassifieds_get_option( '_tc_image_use_images', 1 );
?>

<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Pethome</title>
	</head>
		<body>	archive.php
<?php get_header(); ?>
<?php do_action('terraclassifieds_notice'); ?>

		<!-- start banner Area -->
		<section class="about-banner relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Noclegi we Wrocławiu
						</h1>	
						<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span> wyniki wyszukiwania</p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	







		<!-- Start destinations Area -->
		<section class="destinations-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-40 col-lg-6">
						<div class="title text-center">
							<h1 class="mb-6">List of private locations</h1>
							<p>Find a place and place a book in just two minutes.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="container">
				<div class="row">
<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$price = get_post_meta( get_the_ID(), '_tc_price', true );
			$negotiable = get_post_meta( get_the_ID(), '_tc_negotiable', false );
			$sell_type = get_post_meta( get_the_ID(), '_tc_sell_type', 'price' );
			$email = get_post_meta( get_the_ID(), '_tc_email', true );
			$autor_email = get_the_author_meta("user_email");
			$autor_id = get_the_author_meta("ID");
			$post_id = get_the_ID();
			$gallery = get_post_meta( get_the_ID(), '_tc_gallery', true );
			$user_id = get_the_author_meta( 'ID' );
			$avatar_url = get_user_meta( $user_id, '_tc_avatar', 1 );
			$location_address = get_post_meta( get_the_ID(), '_tc_location_address', true );
			$location_post_code = get_post_meta( get_the_ID(), '_tc_location_post_code', true );
		?>
				<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-destinations">
							

<?php

		// Get the list of files
		$files = get_post_meta(get_the_ID(), '_tc_gallery', 1);
		$files_counter = 0;
		// Loop through them and output an image
		foreach ((array) $files as $attachment_id => $attachment_url) {
			if ($files_counter < 1) {
				$url=wp_get_attachment_image_src($attachment_id, 'large');
				if(!empty($url))
					echo '<a href="'.get_permalink($post->ID).'"><div class="thumb" style="cursor: pointer;background: url('.$url[0].') 50% 50% no-repeat;background-size:500px;min-height:250px;min-width=250px"></div></a>';
			}
			$files_counter++;
		}

?>
					
							<div class="details">
								<h4 class="">
								<a href="<?php echo get_permalink($post->ID); ?>" style="color:black"><?php the_title();	?></a>
								</h4>
								<ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Base price per night</span>
										<a href="#" class="price-btn"><?php echo $price; ?></a>
									</li>											
								</ul>
							</div>
						</div>
					</div>

<?php endwhile; // end of the loop. ?>
					</div>


		</section>
		<!-- End destinations Area -->
		
		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">

				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								We are legally registered company that seriously takes it's responsibility.
								Our mission is to connect people that wants to have a pleasure of hosting a pet 
								with ones that would appriciate such help.
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Navigation Links</h6>
							<div class="row">
								<div class="col">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">Find a place</a></li>
										<li><a href="#">Help</a></li>
									</ul>
								</div>
								<div class="col">
									<ul>
										<li><a href="#">Become a host</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>										
							</div>							
						</div>
					</div>							
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">InstaFeed</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img width="58" height="58" src="img/pexels.com/adorable-animal-animal-world-209037.jpg" alt=""></li>
								<li><img width="58" height="58" src="img/pexels.com/adorable-animal-beautiful-62640.jpg" alt=""></li>
								<li><img width="58" height="58" src="img/pexels.com/animal-beagle-canine-460823.jpg" alt=""></li>
							</ul>
						</div>
					</div>						
				</div>

				<div class="row footer-bottom d-flex justify-content-between align-items-center footer2">
					<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->	

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
		<script src="js/jquery-ui.js"></script>					
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>					
		<script src="js/owl.carousel.min.js"></script>							
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
</html>