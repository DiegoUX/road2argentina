<?php /* Template Name: Program Template */ get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<section class="billboard-program">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 tac col-sm-offset-1">
						<div class="bill-text">
							<h1><?php the_title(); ?></h1>
							<span class="main-caption">
								<?php the_meta(); ?>
							</span>
							<a href="#" class="btn">Click or scroll to Learn more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="background">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</div>
		</section>
		<!-- Main Program Section -->
		<section class="main-program">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tac pt50 pb50">
							<h1>Volunteering</h1>
							<p class="main-p">We at <strong>Road2Argentina</strong> have partneredwith many local non-profit organizations,  schools, orphanages and community centers in Buenos Aires in order to provide assistance to those in need. At the same time, these partnerships give our volunteers the opportunity to get involved with meaningful projects and make a difference during their time here in the city. Volunteering is also a great way to learn and practice your Spanish, or castellano as the locals call it.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<div class="accordion-sec">
							<h2>Volunteer placements</h2>
							<span>Placements in the following areas are available to our volunteers:</span>


							<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							          Collapsible Group Item #1
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse in">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							          Collapsible Group Item #2
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							          Collapsible Group Item #3
							        </a>
							      </h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							      </div>
							    </div>
							  </div>
							</div>


						</div>
					</div>
					<div class="col-sm-4">
						<div class="sidebar">
							<!-- // <?php dynamic_sidebar( 'widget-sidebar-program' ); ?> -->
							<h5>INCLUDED IN THE PROGRAM</h5>
							<ul>
								<li>Tuition and fees</li>
								<li>Housing</li>
								<li>Welcome orientation</li>
								<li>Airport transfer</li>
								<li>Cell phone</li>
								<li>24/7 Staff support</li>
								<li>Weekly group activities</li>
								<li>Group dinners</li>
								<li>Luggage storage</li>
								<li>Road2Argentina backpack with maps, guides and free passes</li>
								<li>Postal mail reception</li>
							</ul>

							<h5>NO APPLICATION IS REQUIRED!</h5>
							<p>This program is open to anyone 18 years or older who is interested in learning or improving their Spanish. Academic credit is granted; however, it is not necessary to be enrolled in a university in order to participate.</p>
						</div>
					</div>
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


				<br class="clear">

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
