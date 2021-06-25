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
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">


<?php
$query = new WP_Query( 'category_name=front-banner' );
while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-lg-6 col-md-6 banner-left thecontent">
							<h1 class="text-white"><?php the_title(); ?></h1>
								<?php the_content(); ?>
						</div>
						
						<?php endwhile; ?>
						<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Miejsca</a>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
								<form class="form-wrap">
									<input type="text" disabled="disabled" class="form-control" name="city" placeholder="City " onfocus="this.placeholder = ''" onblur="this.placeholder = 'City '" value="Wrocław">
									<a href="<?php echo get_site_url(); ?>/?ad_location=wroclaw&post_type=classified" class="primary-btn text-uppercase">Znajdź opiekuna</a>
								</form>
								<p style="padding:3px;font-size:small">*wkrótce globalnie</p>
							  </div>
							  
							</div>
							<span style="list-style-type:none">
						<?php dynamic_sidebar( 'frontbanner-widgetarea' ); ?>
							</span>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


<?php
$args = array(

                'post_type' => 'page',
                'order' => 'ASC',
                'orderby' => 'menu_order',
                'child_of' => $post->ID,
                'taxonomy' => 'category',
                'field' => 'slug',
                'term' => 'home-page-top'
            );
$query = new WP_Query($args);
if( $query->have_posts() ) {
while ($query->have_posts()) : $query->the_post();?>

			<section class="other-issue-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">
								<?php echo get_the_title(); ?>
								</h1>
								<p>
									<?php echo get_the_content(); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

<?php endwhile;
wp_reset_query();
}
?>


			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Opinie</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">



<?php
$query = new WP_Query( 'category_name=opinions' );
while ( $query->have_posts() ) : $query->the_post(); ?>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                        	<img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" />
		                        </div>
		                        <div class="desc">
		                            <?php the_content(); ?>
		                            <h4><?php the_title(); ?></h4>
		                        </div>
		                    </div>
<?php endwhile; wp_reset_query(); ?>

		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->

<?php
$args = array(

                'post_type' => 'page',
                'order' => 'ASC',
                'orderby' => 'menu_order',
                'child_of' => $post->ID,
                'taxonomy' => 'category',
                'field' => 'slug',
                'term' => 'home-page-bottom'
            );
$query = new WP_Query($args);
if( $query->have_posts() ) {
while ($query->have_posts()) : $query->the_post();?>

<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-end">
						<div class="col-lg-<?php if(has_post_thumbnail()) echo '6'; else echo '12'; ?> col-md-12 home-about-left">
							<h1>
								<?php echo get_the_title(); ?>
							</h1>
							<p>
								<?php echo get_the_content(); ?>
							</p>
						</div>
						<?php if(has_post_thumbnail()) {?>
						<div class="col-lg-6 col-md-12 home-about-right no-padding">
							<img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" /> 
						</div>
						<?php }?>
					</div>
				</div>
			</section>

<?php endwhile;
wp_reset_query();
}
?>

<?php get_footer(); ?>
			
		</body>
	</html>