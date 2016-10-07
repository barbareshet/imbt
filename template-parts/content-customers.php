<?php 
$loop = new WP_Query(array(
            'post_type'=>'customers',
            'orderby' =>'post_id',
            'order' => 'ASC',
            'posts_per_page' => 6)
                              ); ?>
<!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <?php while($loop->have_posts()) : $loop->the_post();?>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <a href="<?php the_field('customer_link');?>">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="<?php the_title();?>">
               </a>
            </div>
            
            <?php endwhile;?>
        </div>
        <!-- /.row -->

        <hr>