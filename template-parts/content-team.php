<?php 
$loop = new WP_Query(array(
            'post_type'=>'teammembers',
            'orderby' =>'post_id',
            'order' => 'ASC',
            'posts_per_page' => 6)
                              ); ?>
<!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
        <?php while($loop->have_posts()) : $loop->the_post();?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3><?php the_field('tn_name');?><br>
                            <small><?php the_field('tm_job_title');?></small>
                        </h3>
                        <p><?php the_field('tm_job_desc');?></p>
                        <ul class="list-inline">
                            <li><a href="<?php the_field('tm_facebook_link');?>"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="<?php the_field('tm_linkedin_link');?>"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="<?php the_field('tm_twitter_link');?>"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile;?>  
                        
        </div><!-- /.row -->