<?php /* Template Name: Home Template */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<main role="main">

	<section class="slider">

		<!--<div class="container billboard-legend">
			<div class="inner-box">
				<h1>SPANISH CLASSES</h1>
				<p>Lorem ipsum ad sidera met non dolor manque</p>
				<a href="#" class="btn">APPLY NOW</a>
			</div>
		</div>-->
		<!--Plugin Slider -->
		<nav class="nav-thumbflip">
		<?php echo do_shortcode("[metaslider id=11]"); ?>
		</nav>
		<!--/ Plugin Slider -->

		
	</section>

	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
			
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
		
</main>			

<?php get_footer(); ?>