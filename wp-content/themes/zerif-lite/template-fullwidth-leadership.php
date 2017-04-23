<?php
/**
 * Template Name: Full Width Page Leadership with Hero
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

				<main id="main" class="site-main leadership-widget">

					<?php
					/* OUR TEAM */

					$zerif_ourteam_show = get_theme_mod('zerif_ourteam_show');

					if( isset($zerif_ourteam_show) ):

					zerif_before_our_team_trigger();

						get_template_part( 'sections/our_team' );

					zerif_after_our_team_trigger();

					endif;
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php zerif_bottom_page_content_trigger(); ?>

		</div><!-- .content-left-wrap -->

		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->

<?php get_footer(); ?>
