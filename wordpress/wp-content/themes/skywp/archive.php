<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Urchenko
 * @subpackage SkyWP WordPress theme
 * @since SkyWP 1.0.0
 */

get_header();

	if ( get_theme_mod( 'skywp_archives_sidebar', 'sidebar-right' ) == 'sidebar-left' ) {
		get_sidebar();
	} ?>
	
	<div id="primary" class="content-area arhive-page">

		<main id="main-style" class="arhive-page blog-page">

			<div id="skywp-content" class="content-wrapper <?php echo esc_attr( skywp_select_post_style() .' '. skywp_number_columns_posts() ); ?>">

				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				
			</div><!-- .content-wrapper -->

			<?php the_posts_pagination(
				array(
					'show_all'     => true, // shows all pages in pagination involved
					'end_size'     => 1,     // number of pages at ends
					'mid_size'     => 1,     // number of pages around the current page
					'prev_next'    => true,  // whether to display side links "previous/next page".
					'prev_text'    => '<i class="fas fa-chevron-left"></i>',
					'next_text'    => '<i class="fas fa-chevron-right"></i>',
				)
			); ?>

		</main><!-- #main -->

	</div><!-- #primary -->

	<?php if ( get_theme_mod( 'skywp_archives_sidebar', 'sidebar-right' ) == 'sidebar-right' ) {
		get_sidebar();
	} ?>

<?php get_footer(); ?>

