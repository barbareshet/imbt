<?php
$cta_text = get_field('cta_text');
$cta_btn_text = get_field('cta_btn_text');
$cta_btn_link = get_field('cta_btn_link');
?>
       <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p><?php echo $cta_text;?></p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="<?php echo $cta_btn_link ;?>"><?php echo $cta_btn_text ;?></a>
                </div>
            </div>
        </div>