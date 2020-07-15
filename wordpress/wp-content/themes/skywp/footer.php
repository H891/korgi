<?php
/**
 * The template for displaying the footer
 *
 * @package Urchenko
 * @subpackage SkyWP WordPress theme
 * @since SkyWP 1.0.3
 */
?>
<?php do_action( 'skywp_outer_content_wrapper_after' ); ?>

	</div><!-- #content -->

		<footer id="footer-area" class="<?php echo esc_attr( skywp_footer_classes() ); ?>">

			<?php
			do_action( 'skywp_footer_layout' );

			// Copyright
			get_template_part( 'template-parts/footer/copyright' );
			?>
			
		</footer>

		<?php
		
	
		// Scroll to top
		if ( true == get_theme_mod('skywp_scroll_up_button', true) ) {
			get_template_part( 'template-parts/scroll-top' );
		}
		?>

		</div><!-- #wrap -->

	</div><!-- #outer-wrap -->

<?php wp_footer(); ?>

</body>
</html>
