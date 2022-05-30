	<footer id="footer">
		<!--<div class="site-footer d-inline-flex justify-content-between">
			<div class="footer1">
				<img src="https://agapiboatclub.com/wp-content/uploads/2021/02/agapi-boat-club-Vert-white-uai-258x161.png" width="114" height="71" alt="">
				<div class="socials">
					<div class="social-icon">
						<a href="<?php the_field('facebook','option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<div class="social-icon">
						<a href="<?php the_field('instagram','option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
					<div class="social-icon">
						<a href="<?php the_field('linkedin','option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="social-icon">
						<a href="<?php the_field('youtube','option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="footers d-flex justify-content-between text-left">
				<div class="footer2">
					<h4 class="footer-header">
						<?php
							$menu = wp_get_nav_menu_object("About AGAPI");
							echo $menu->name;
						?>
					</h4>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu-about',
							'menu_id'        => 'footer-menu-about',
							'menu'                 => '',
							'echo'                 => true,
							'fallback_cb'          => 'wp_page_menu',
							'depth'                => 1,
							'before'                => '<i class="fa fa-arrow-right"></i>',
						)
					);
					?>
				</div>
				<div class="footer3">
					<h4 class="footer-header">
						<?php the_field('contact_title','option'); ?>
					</h4>
					<div class="uncode_text_column">
						<?php the_field('contact_section','option'); ?>
					</div>
				</div>
				<div class="footer4">
					<?php 
					$link = get_field('members_button','option');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="custom-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-right',
							'menu_id'        => 'footer-menu-right',
							'menu'                 => '',
							'echo'                 => true,
							'fallback_cb'          => 'wp_page_menu',
							'depth'                => 1,
							'before'                => '<i class="fa fa-arrow-right"></i>',
						)
					);
					?>
					<p class="copyRight">
						<?php the_field('copyright','option'); ?>
					</p>
				</div>
			</div>
		</div>-->
		<div class="site-footer">
				<?php if ( is_active_sidebar( 'works_sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'works_sidebar' ); ?>
				<?php endif; ?>
			</div>
	</footer>
	<a href="mailto:info@agapiboatclub.com" class="getInTouch"><i class="far fa-envelope fa-rotate-90"></i> GET IN TOUCH</a>
	<div class="backToTop">
		<a href="#" ><img src="<?php echo THEME_DIR_URI;?>/src/images/design/arrow.svg" alt=""></i></a>
	</div>
<?php wp_footer(); ?>
</body>
</html>