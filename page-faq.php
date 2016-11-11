<?php

/* 
 * template name: FAQ Page
 * 
 * 
 */
$page_title = get_post_meta($post ->ID, 'page title', true);
$page_title_sub_heading = get_post_meta($post->ID, '$page_title_sub_heading', true);
get_header();?>


<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $page_title ;?>                    
                    <small><?php echo $page_title_sub_heading ;?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">FAQ</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

<?php

if (have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part('template-parts/content', 'faq');

				


			endwhile; // End of the loop.

    endif;
			?>








<?php get_footer();?>