 <?php	if ( is_active_sidebar( 'home_sidebar' ) ) {		dynamic_sidebar( 'home_sidebar' );	} else {       ?>			<div class="feedback block">				<h2 class="block-title">					<?php						if ( get_theme_mod( 'testimonials_title','What customers says' ) ) {							echo get_theme_mod( 'testimonials_title','What customers says' );						}					?>				</h2>				<div class="feedback">					<p class="feedback-meta">						<strong>							<?php								if ( get_theme_mod( 'testimonial_first_name','Ionut Neagu' ) ) {									echo get_theme_mod( 'testimonial_first_name','Ionut Neagu' );								}							?>													</strong>					</p><!--/.feedback-meta-->					<blockquote>						<p>							<?php									if ( get_theme_mod( 'testimonial_first_content','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus justo at justo facilisis, et gravida lacus ornare. Proin nisl mauris, pretium et euismod a, congue quis odio.' ) ) {										echo get_theme_mod( 'testimonial_first_content','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus justo at justo facilisis, et gravida lacus ornare. Proin nisl mauris, pretium et euismod a, congue quis odio.' );									}							?>							</p>					</blockquote><!--/.feedback-entry-->				</div>				<div class="feedback">					<p class="feedback-meta">						<strong>							<?php								if ( get_theme_mod( 'testimonial_second_name','Marius Cristea' ) ) {									echo get_theme_mod( 'testimonial_second_name','Marius Cristea' );								}							?>													</strong>					</p><!--/.feedback-meta-->					<blockquote>						<p>							<?php									if ( get_theme_mod( 'testimonial_second_content','Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sed magna ante. Duis sodales, dui vitae tincidunt aliquet, augue magna pharetra libero, nec congue nibh felis congue purus.' ) ) {										echo get_theme_mod( 'testimonial_second_content','Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sed magna ante. Duis sodales, dui vitae tincidunt aliquet, augue magna pharetra libero, nec congue nibh felis congue purus.' );									}							?>	 						</p>					</blockquote>				</div>			</div>        <?php	}	?>