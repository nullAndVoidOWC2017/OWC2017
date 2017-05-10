<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<?php zerif_before_footer_trigger(); ?>

<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<?php zerif_footer_widgets_trigger(); ?>

	<div class="container">

		<?php zerif_top_footer_trigger(); ?>

		<?php
			$footer_sections = 0;

			if ( current_user_can( 'edit_theme_options' ) ) {
				$zerif_address = get_theme_mod( 'zerif_address',sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_address' ) ), __( 'Company address','zerif-lite' ) ) );
				$zerif_address_icon = get_theme_mod( 'zerif_address_icon', get_template_directory_uri().'/images/map25-redish.png' );
			} else {
				$zerif_address = get_theme_mod( 'zerif_address' );
				$zerif_address_icon = get_theme_mod( 'zerif_address_icon' );
			}

			if ( current_user_can( 'edit_theme_options' ) ) {
				$zerif_email = get_theme_mod( 'zerif_email',sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_email' ) ), __( 'youremail@site.com','zerif-lite' ) ) );
				$zerif_email_icon = get_theme_mod( 'zerif_email_icon', get_template_directory_uri().'/images/envelope4-green.png' );
			} else {
				$zerif_email = get_theme_mod( 'zerif_email' );
				$zerif_email_icon = get_theme_mod( 'zerif_email_icon' );
			}

			if ( current_user_can( 'edit_theme_options' ) ) {
				$zerif_phone = get_theme_mod( 'zerif_phone',sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_phone' ) ), __( '0 332 548 954','zerif-lite' ) ) );
				$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon', get_template_directory_uri().'/images/telephone65-blue.png' );
			} else {
				$zerif_phone = get_theme_mod( 'zerif_phone' );
				$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon' );
			}

			$zerif_socials_facebook = get_theme_mod( 'zerif_socials_facebook' );
			$zerif_socials_twitter = get_theme_mod( 'zerif_socials_twitter' );
			$zerif_socials_linkedin = get_theme_mod( 'zerif_socials_linkedin' );
			$zerif_socials_behance = get_theme_mod( 'zerif_socials_behance' );
			$zerif_socials_dribbble = get_theme_mod( 'zerif_socials_dribbble' );
			$zerif_socials_instagram = get_theme_mod( 'zerif_socials_instagram' );

			$zerif_accessibility = get_theme_mod('zerif_accessibility');
			$zerif_copyright = get_theme_mod('zerif_copyright');

			$zerif_powered_by = true;

			if( ! empty( $zerif_address ) || ! empty( $zerif_address_icon ) ) {
				$footer_sections ++;
			}

			if( ! empty( $zerif_email ) || ! empty( $zerif_email_icon ) ) {
				$footer_sections ++;
			}

			if( ! empty( $zerif_phone ) || ! empty( $zerif_phone_icon ) ) {
				$footer_sections ++;
			}
			if( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {
				$footer_sections ++;
			}

			if( $footer_sections == 1 ) {
				$footer_class = 'col-md-12';
			} elseif( $footer_sections == 2 ) {
				$footer_class = 'col-md-6';
			} elseif( $footer_sections == 3 ) {
				$footer_class = 'col-md-4';
			} elseif( $footer_sections == 4 ) {
				$footer_class = 'col-md-3';
			} else {
				$footer_class = 'col-md-3';
			}

			if( ! empty( $footer_class ) ) {

				/* COMPANY ADDRESS */
				if( ! empty( $zerif_address_icon ) || ! empty( $zerif_address ) ) {
					echo '<div class="'.$footer_class.' company-details footer-list">';

						echo '<ul class="list-unstyled">';
							echo '<li>';
								if( ! empty( $zerif_address_icon ) ) {
									echo '<span class="icon"><img src="'.esc_url( $zerif_address_icon ).'" alt="" /></span>';
								}
								if( ! empty( $zerif_address ) ) {
									//echo wp_kses_post( $zerif_address );
									echo '<a href="'.esc_url( $zerif_address ).'">Locations</a>';
								}
							echo '</li>';

							echo '<li>';
								if( ! empty( $zerif_email_icon) ) {
									echo '<span class="icon"><img src="'.esc_url( $zerif_email_icon ).'" alt="" /></span>';
								}
								if( ! empty( $zerif_email) ) {
									//echo wp_kses_post( $zerif_email );
									echo '<a href="mailto:'.$zerif_email.'">Email Us</a>';
								}
							echo '</li>';

							echo '<li>';
								if( ! empty( $zerif_phone_icon ) ) {
									echo '<span class="icon"><img src="'.$zerif_phone_icon.'" alt="" /></span>';
								}
								if( ! empty( $zerif_phone ) ) {
									//echo wp_kses_post( $zerif_phone );
									echo '<a href="tel:'.$zerif_phone.'">'.$zerif_phone.'</a>';
								}
							echo '</li>';
						echo '</ul>';

					echo '</div>';
				}
			}

			// open link in a new tab when checkbox "accessibility" is not ticked
			$attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '' );

			if( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_socials_instagram ) ) {

				echo '<div class="' . $footer_class . ' footer-list social-media">';
				if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ) {

					echo '<ul class="list-unstyled">';

					/* facebook */
					if ( ! empty( $zerif_socials_facebook ) ) {
						echo '<li id="facebook"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_facebook ) . '"><span class="sr-only">' . __( 'Facebook link', 'zerif-lite' ) . '</span> <i class="fa fa-facebook"></i> Facebook</a></li>';
					}
					/* twitter */
					if ( ! empty( $zerif_socials_twitter ) ) {
						echo '<li id="twitter"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_twitter ) . '"><span class="sr-only">' . __( 'Twitter link', 'zerif-lite' ) . '</span> <i class="fa fa-twitter"></i> Twitter</a></li>';
					}
					/* linkedin */
					if ( ! empty( $zerif_socials_linkedin ) ) {
						echo '<li id="linkedin"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_linkedin ) . '"><span class="sr-only">' . __( 'Linkedin link', 'zerif-lite' ) . '</span> <i class="fa fa-linkedin"></i> LinkedIn</a></li>';
					}
					/* behance */
					if ( ! empty( $zerif_socials_behance ) ) {
						echo '<li id="behance"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_behance ) . '"><span class="sr-only">' . __( 'Behance link', 'zerif-lite' ) . '</span> <i class="fa fa-behance"></i> Behance</a></li>';
					}
					/* dribbble */
					if ( ! empty( $zerif_socials_dribbble ) ) {
						echo '<li id="dribbble"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_dribbble ) . '"><span class="sr-only">' . __( 'Dribble link', 'zerif-lite' ) . '</span> <i class="fa fa-dribbble"></i> Dribble</a></li>';
					}
					/* instagram */
					if ( ! empty( $zerif_socials_instagram ) ) {
						echo '<li id="instagram"><a' . $attribut_new_tab . ' href="' . esc_url( $zerif_socials_instagram ) . '"><span class="sr-only">' . __( 'Instagram link', 'zerif-lite' ) . '</span> <i class="fa fa-instagram"></i> Instagram</a></li>';
					}

					echo '</ul><!-- .social -->';
				}
				echo '</div>';
			}


			echo '<div class="' . $footer_class . ' subscribe-form">';
				echo '<p style="color:#eee;">Newsletter Sign-Up</p>';
				echo '<form class="form-inline">';
				echo '<div class="input-group">';
					echo '<label class="label-control sr-only">Newsletter</label>';
					echo '<input style="margin-top:10px" type="text" class="form-control" placeholder="email@example.com">';
					echo '<span class="input-group-btn">';
						echo '<button class="btn btn-default" type="button">Go!</button>';
					echo '</span>';
				echo '</div>';
				echo '</form>';

			echo '</div>';


			if( ! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) ){

				echo '<div class="' . $footer_class . ' copyright">';

					if ( ! empty( $zerif_copyright ) ) {
						echo '<p id="zerif-copyright">&copy; ' . wp_kses_post( $zerif_copyright ) . '</p>';
					} elseif ( is_customize_preview() ) {
						echo '<p id="zerif-copyright" class="zerif_hidden_if_not_customizer"></p>';
					}

					// echo '<a href="#">Privacy Policy</a><br>';
					// echo '<a href="#">Site Map</a>';

					echo '<a href="/privacy">Privacy Policy</a><br>';
					echo '<a href="sitemap.xml">Site Map</a>';

				echo '</div>';

			}

		?>
		<?php zerif_bottom_footer_trigger(); ?>
	</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->

<?php zerif_after_footer_trigger(); ?>

	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->

<?php
/*
 *  Fix for sections with widgets not appearing anymore after the hide button is selected for each section
 * */
if ( is_customize_preview() ) {

	if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourfocus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-aboutus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourteam' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-testimonials' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-testimonials' );
		echo '</div>';
	}
}

?>

<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

</body>

</html>
