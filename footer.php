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
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie2.js"></script>
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

		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger, a.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 600 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
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
