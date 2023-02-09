<!--pricing start -->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="pricing-details">
            <div class="section-header text-center">
                <?php 
                    $pricing_section_title = get_field('pricing_section_title', 'options');
                    $pricing_table_subtitle = get_field('pricing_table_subtitle', 'options');
                ?>
                <h2 class="price-head">
                    <?php 
                        if($pricing_section_title) {
                            echo $pricing_section_title;
                        }
                    ?>
                </h2>
                <p>
                    <?php 
                        if($pricing_table_subtitle) {
                            echo $pricing_table_subtitle;
                        }
                    ?>
                </p>
            </div>
            <!--/.section-header-->
            <div class="pricing-content">
                <div class="row">
                    <?php 
                        $args = [
                            'post_type'         => 'price',
                            'posts_per_page'    => 4,
                            'order'             => 'ASC'
                        ];
                        $price_query = new WP_Query($args);
                        while($price_query->have_posts()) : $price_query->the_post();
                        $package_title = get_field('package_title');
                        $package_cost = get_field('package_cost');
                        $currency_symbol = get_field('currency_symbol');
                        $package_duration = get_field('package_duration');
                        $purchase_button_label = get_field('purchase_button_label');
                        $purchase_button_link = get_field('purchase_button_link');
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <h2>
                                    <?php 
                                        if($package_title) {
                                            echo $package_title;
                                        }
                                    ?>
                                </h2>
                                <h3 class="packeg_p">
                                    <span>
                                        <?php 
                                            if($currency_symbol) {
                                                echo $currency_symbol;
                                            }
                                        ?>    
                                    </span>
                                    <?php 
                                        if($package_cost) {
                                            echo $package_cost;
                                        }
                                    ?>   
                                </h3>
                                <p>
                                    <?php 
                                        if($package_duration) {
                                            echo $package_duration;
                                        }
                                    ?>  
                                </p>
                            </div>
                            <!--/.pricing-header-->
                            <?php 
                                $package_items = get_field('package_items');
                                if($package_items) :
                            ?>
                            <ul class="plan-lists">
                                <?php 
                                    foreach($package_items as $package_item) :
                                ?>
                                <li>
                                    <?php 
                                        echo $package_item['package_item'];
                                    ?>
                                </li>
                                <?php 
                                    endforeach;
                                ?>
                            </ul>
                            <!--/ul-->
                            <?php 
                                endif;
                            ?>
                            <div class="project-btn pricing-btn text-center">
                                <a href="<?php echo $purchase_button_link; ?>" class="project-view">
                                    <?php 
                                        if($purchase_button_label) {
                                            echo $purchase_button_label;
                                        }
                                    ?>
                                </a>
                            </div>
                            <!--/.project-btn-->
                        </div>
                        <!--/.pricing-box-->
                    </div>
                    <!--/.col-->
                    <?php 
                        endwhile;
                    ?>    
                </div>
                <!--/.row-->
            </div>
            <!--/.pricing-content-->
        </div>
        <!--/.pricing-details-->
    </div>
    <!--/.container-->

</section>
<!--/.pricing-->
<!--pricing end-->