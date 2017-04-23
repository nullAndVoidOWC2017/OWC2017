<?php


	echo '<section class="separator-one" id="home-calendar">';


		echo '<div class="color-overlay">';
			echo '<div class="container">';
				echo '<h2 class="container text dark-text home-calendar-title" data-scrollreveal="enter left after 0s over 1s">';

					echo 'Volunteer Calendar';

				echo '</h2>';

				echo do_shortcode('[calendar id="5"]');
				
			echo '</div>';
		echo '</div>';


	echo '</section>';


?>
