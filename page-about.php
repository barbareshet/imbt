<?php

/* 
 * template name: About Page
 * 
 * 
 */

get_header();?>
    
      <!-- Page Heading/Breadcrumbs -->
        <div class="row">
           <?php
            if (have_posts() ) 
                while(have_posts() ) : the_post();?>
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php the_title();?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
                </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
               <?php if( has_post_thumbnail() ) : the_post_thumbnail(); ?>
               
               <?php else : ;?>
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <?php endif;?>
            </div>
            <div class="col-md-6">
                <?php the_content() ;?>
            </div>
        </div>
        <!-- /.row -->
                
            
            
            <?php endwhile;
            
            ?>
            
       

        <?php get_template_part('template-parts/content', 'team');?>
        <?php get_template_part('template-parts/content', 'customers');?>

        

<?php get_footer();?>
