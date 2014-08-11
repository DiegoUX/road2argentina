<?php /* Template Name: Contact Template */ get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<section class="billboard-program billboard-contact">
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
			<div class="background background-contact">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</div>
		</section>

		<!-- Main Contact Section -->
		<section class="main-program main-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h3>Send Us a Message</h3>
						<div class="form-sendus">
							<?php echo do_shortcode( '[contact-form-7 id="82" title="Contact Form 4 Contact Us"]' ) ?>
						</div>
					</div>

					<div class="col-sm-6">
						<h3>Let's talk!</h3>
						<ul>
							<li><span class="icon-housing"></span><p>Anchorena 1676 (Recoleta)</p><p>Capital Federal, Argentina CP1425ELL</p></li>
							<li><span class="icon-svg"></span><span>+54 (11) 4826-0820</span></li>
							<li><span class="icon-svg"></span><p>+1 (347) 974-3705</p><p>if calling from the United States or Canada</p></li>
							<li><span class="icon-chat"></span><a href="#">Chat with us online &#187;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="map-contact">
			<div class="map-box">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.513251089626!2d-58.40264929999818!3d-34.591180868133094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca9a5437266d%3A0xc9e6860fa913f036!2sDoctor+Tom%C3%A1s+Manuel+de+Anchorena+1676%2C+Buenos+Aires%2C+Ciudad+Aut%C3%B3noma+de+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1407360404255" width="100%" height="516" frameborder="0" style="border:0"></iframe>
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
