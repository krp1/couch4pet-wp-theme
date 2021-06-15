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
			<?php get_header(); ?>
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


<!-- page.php -->

<div class="whole-wrap">
	<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	</div>
</div>



<?php get_footer(); ?>		

		</body>
	</html>