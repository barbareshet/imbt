<?php

/* 
 * template name: Contact Page
 * 
 * 
 */

get_header();?>

<?php

if (have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

				


			endwhile; // End of the loop.

    endif;
			?>








<?php get_footer();?>