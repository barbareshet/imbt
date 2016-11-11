<!-- Content Row -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="panel-group" id="accordion">
                   <?php if( have_rows('faq') ) :?>
                       <?php while ( have_rows('faq') ) : the_row();?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('question_num');?>">
                                <i class="fa fa-question-circle-o"></i><?php the_sub_field('question');?></a>
                            </h4>
                        </div>
                        <div id="collapse<?php the_sub_field('question_num');?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <i class="fa fa-info"></i><?php the_sub_field('answer');?>
                            </div>
                        </div>
                    </div><!-- /.panel -->
                    <?php endwhile; endif;?>
                </div><!--#accordion-->
                <!-- /.panel-group -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->