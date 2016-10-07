<?php
$intro_section_title = get_field('intro_section_title');

?>
       <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $intro_section_title;?>
                </h1>
            </div>
            <?php
            
                // check if the repeater field has rows of data
                if( have_rows('main_features') ):
                    //$feature_icon = get_field('feature_icon');
                    // loop through the rows of data
                    while ( have_rows('main_features') ) : the_row();?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-<?php the_sub_field('feature_icon');?>"></i> <?php the_sub_field('feature_title');?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php the_sub_field('feature_desc');?></p>
                                <a href="<?php the_sub_field('feature_btn_link');?>" class="btn btn-default"><?php the_sub_field('feature_btn_text');?></a>
                            </div>
                        </div>
                    </div>                       

              <?php      endwhile;

                else :

                    // no rows found

                endif;
            
            ?>
            
        </div>
        <!-- /.row -->