<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<div class="footer-colonna">
				 <h3>menu</h3>
				 	<ul>
				 		<li><a href="#">premio</a></li>
						<li><a href="#">edizione 2017</a></li>
						<li><a href="#">premi speciali</a></li>
						<li><a href="#">press</a></li>
				 	</ul>
				</div>
				<div class="footer-colonna">
					<h3>book fotografico</h3>
					<ul>
						<li><a href="#">2016</a></li>
						<li><a href="#">2015</a></li>
						<li><a href="#">2014</a></li>
					</ul>
				</div>
				<div class="footer-colonna">
					<h3>grandprix</h3>
					<ul>
						<li><a href="#">2016</a></li>
						<li><a href="#">2015</a></li>
						<li><a href="#">2014</a></li>
					</ul>
				</div>
				<div class="footer-colonna">
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-as.png">
					<img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-bi.png">
				</div>
			</footer>
		</div>
		<div id="banda-loghi">
			<img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/banda-loghi.png">
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
