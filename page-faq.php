<?php

/* 
 * template name: FAQ Page
 * 
 * 
 */

get_header();?>

<?php

if (have_posts() ) :

			while ( have_posts() ) : the_post();

				

				


			endwhile; // End of the loop.

    endif;
			?>








<?php get_footer();?>