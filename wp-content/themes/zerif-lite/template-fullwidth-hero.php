<?php
/**
 * Template Name: Full Width Page Hero
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>

<div id="hero" class="hero-image text-center">
	<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( null, 'post-thumbnail', '' ); ?>"/>
	<h1 class="hero-title"><?php echo get_the_title(); ?></h1>
</div>

<div id="content" class="site-content hero-content">

	<div class="container">

		<?php zerif_before_page_content_trigger(); ?>

		<div class="content-left-wrap col-md-12">

			<?php zerif_top_page_content_trigger(); ?>

			<div id="primary" class="content-area">

				<main id="main" class="site-main">

					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page-hero' );

							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;

						endwhile;
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php zerif_bottom_page_content_trigger(); ?>

		</div><!-- .content-left-wrap -->

		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
