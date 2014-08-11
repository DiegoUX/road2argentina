			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<h3>Get in touch</h3>
							<?php dynamic_sidebar( 'widget-footer-area-1' ); ?>
						</div>
						<div class="col-sm-2">
							<h3>Useful links</h3>
							<?php dynamic_sidebar( 'widget-footer-area-2' ); ?>
						</div>
						<div class="col-sm-4">
							<h3>About us</h3>
							<?php dynamic_sidebar( 'widget-footer-area-3' ); ?>
						</div>
						<div class="col-sm-4">
							<h3>Where to find us</h3>
							<?php dynamic_sidebar( 'widget-footer-area-4' ); ?>
							<div class="contact-form">
								 <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ) ?> 
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
			<!-- /sub-footer -->
			<section class="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-10">
							<!-- copyright -->
							<p class="copyright">
								Copyright &copy; <?php echo date('Y'); ?> Road2Argentina.com. All Rights Reserved.
							</p>
							<!-- /copyright -->	
						</div>
						<div class="col-sm-2">
							<a href="#totop" class="scrollup backto">Back to Top</a>
						</div>
					</div>
				</div>
			</section>

		<!-- </div> -->
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- bxSlider CSS file -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor/jquery.bxslider.css" rel="stylesheet" />

		<!-- jQuery library (served from Google) -->
		<!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrolltop.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.79639.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/demo1.js"></script>

		<script>
			$(document).ready(function(){
			  $('.bxslider').bxSlider();
			});
		</script>
		<script>
			$(document).ready(function () {
				$('.center-video .bx-next').click(function(){
					$('.right-video .bx-next, .left-video .bx-next').click();
				});
				
				$('.center-video .bx-prev').click(function(){
					$('.left-video .bx-prev, .right-video .bx-prev').click();
				}); 
			});
		</script>

		<!--Dropdown menu-->
		<script>
		$("#dd ul").addClass("dropdown");
				function DropDown(el) {
		    this.dd = el;
		    this.initEvents();
		}
		DropDown.prototype = {
		    initEvents : function() {
		        var obj = this;
		 
		        obj.dd.on('click', function(event){
		            $(this).toggleClass('active');
		            event.stopPropagation();
		        }); 
		    }
		}

		$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});
		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
