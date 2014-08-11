<?php /* Template Name: Registration Template */ get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<section class="billboard-program registration-billboard">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 tac col-sm-offset-1">
						<div class="bill-text">
							<h1><?php the_title(); ?></h1>
							<span class="main-caption">
								<?php the_meta(); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="background">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</div>
		</section>

		<!-- Main Registration Section -->
		<section class="main-program main-registration">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="cont-form-reg">
							<?php echo do_shortcode( '[contact-form-7 id="74" title="Contact Form 3 Registration"]' ) ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>

		<!-- section -->
		<section>

		<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<!--<br class="clear">-->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
