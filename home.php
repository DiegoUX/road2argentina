<?php /* Template Name: Home Template */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<main role="main">

<section class="slider">

	
	<!--Plugin Slider -->
	<?php echo do_shortcode("[metaslider id=11]"); ?>
	<!--/ Plugin Slider -->

	<div class="container billboard-legend">
		<div>
			<h1>SPANISH CLASSES</h1>
			<p>Lorem ipsum ad sidera met non dolor manque</p>
			<a href="#">APPLY NOW</a>
			</div>
		</div>

</section>

	<div class="container">
		<div class="col-md-12">

		</div>

		<div class="col-md-6">
			<section class="latest-posts">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</section>	
		</div>

		<div class="col-md-6">
			<section class="main-content">
				<?php the_content(); ?>
			</section>
		</div>
	</div>
</main>			

<?php get_footer(); ?>