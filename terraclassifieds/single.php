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
		<body>

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
//-----------

?>
<!-- \terraclassifieds\single.php -->
		<?php get_header(); ?>
<?php do_action('terraclassifieds_notice'); ?>

			<!-- start banner Area -->
			<section class="relative about-banner about-banner2" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start Sample Area -->
			<br />
			<br />
			<div class="title text-center">
				<h1 class="mb-6"><?php the_title();?></h1>
				<br/>
				<br/>
			</div>
			<!-- End Sample Area -->
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Me and my place</h3>
						<div class="row">
							<div class="col-md-3">
								<img src="<?php foreach ( $gallery as $key => $value ) {
	$large_url = wp_get_attachment_image_src($key,'tcf-single', true); 
		echo esc_url($large_url[0]); 
	} 
?>" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
								<?php the_content();?>
							</div>
						</div>
					</div>
					
					<div class="section-top-border">
						<h3 class="mb-30">Szczegóły</h3>
						<div class="row">
							
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Lokalizacja</h4>
									<p><?php echo $location_address;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Cennik</h4>
									<p>Cena za dobę <b><?php echo $price ;?></b> pln <?php if($negotiable) {echo 'negocjowalne';};?></p>
									<p>Dodatkowe usługi mogą zostać ustalone bezpośrednio.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 03</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h3 class="mb-30">Kalendarz rezerwacji</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
<?php 
global $post;
$post_slug = $post->post_name;
$code = "[CP_APP_HOUR_BOOKING id=\"4\" name=\"".$post_slug."\"]";


$current_user = wp_get_current_user();
if ( $current_user->ID != 0){
	echo(do_shortcode($code)); 
}
else {echo 'Zaloguj się, aby zobaczyć kalendarz i dokonać rezerwacji.';}

?>

								</blockquote>
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h3 class="mb-6">Details</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Attribute</div>
									<div class="visit">Value</div>
								</div>
								<div class="table-row">
									<div class="serial">01</div>
									<div class="country">Separate room</div>
									<div class="visit">
										<div class="primary-checkbox">
											<input type="checkbox" id="primary-checkbox" checked>
											<label for="primary-checkbox"></label>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">02</div>
									<div class="country">Maximum cats</div>
									<div class="visit">
										4
									</div>
								</div>
								<div class="table-row">
										<div class="serial">03</div>
										<div class="country">Food supplied</div>
										<div class="primary-checkbox">
												<input type="checkbox" id="primary-checkbox">
												<label for="primary-checkbox"></label>
											</div>
									</div>
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h3>Image Gallery</h3>
						<div class="row gallery-item">
							<div class="col-md-6">
								<a href="img/supercat1.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/supercat1.jpg);"></div></a>
							</div>
							<div class="col-md-4">
								<a href="img/supercat2.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/supercat2.jpg);"></div></a>
							</div>
							<div class="col-md-2">
								<a href="img/supercat3.jpg" class="img-gal"><div class="single-gallery-image" style="background: url(img/supercat3.jpg);"></div></a>
							</div>
						</div>
					</div>
					
			</div>
			<!-- End Align Area -->

			<?php get_footer(); ?>	

		</body>
	</html>