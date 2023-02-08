<!--statistics start-->
<?php 
    $counter_bg = get_field('counter_section_background', 'options');
?>
<section class="statistics" style="background-image:url(<?php echo $counter_bg; ?>">
    <div class="container">
        <div class="statistics-counter">
            <?php 
                $counter_items = get_field('counter_items', 'options');
                if($counter_items) : 
                    foreach($counter_items as $counter_item) :
                        $counter_image  = $counter_item['counter_image'];
                        $count_number   = $counter_item['count_number'];
                        $count_text     = $counter_item['count_text'];
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-img">
                        <img src="<?php echo $counter_image; ?>" alt="<?php echo $count_text; ?>" />
                    </div><!--/.statistics-img-->
                    <div class="statistics-content">
                        <div class="counter">
                            <?php 
                                if($count_number) {
                                    echo $count_number;
                                }
                            ?>
                        </div>
                        <h3>
                            <?php 
                                if($count_text) {
                                    echo $count_text;
                                }
                            ?>
                        </h3>
                    </div><!--/.statistics-content-->
                </div><!--/.single-ststistics-box-->
            </div><!--/.col-->
            <?php 
                endforeach;
                endif;
            ?>

        </div><!--/.statistics-counter-->
    </div><!--/.container-->

</section><!--/.statistics-->
<!--statistics end-->