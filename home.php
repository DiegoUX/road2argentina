<?php /* Template Name: Home Template */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<main role="main">
	<section class="slider">
		Slider
	</section>

	<section class="latest-posts">
		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>
	</section>

	<section class="main-content">
		<?php the_content(); ?>
	</section>
</main>			

<?php get_footer(); ?>