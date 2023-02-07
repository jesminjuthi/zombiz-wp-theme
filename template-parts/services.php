<!--service start-->
<section id="service" class="service">
    <div class="container">
        <div class="service-details">
            <div class="section-header text-center">
                <?php 
                    $services_section_title = get_field('services_section_title', 'options');
                    $services_section_description = get_field('services_section_description', 'options');
                ?>
                <h2>
                    <?php 
                        if($services_section_title) {
                            echo $services_section_title;
                        }
                    ?>
                </h2>
                <p>
                    <?php 
                        if($services_section_description) {
                            echo $services_section_description;
                        }
                    ?>
                </p>
            </div><!--/.section-header-->
            <div class="service-content-one">
                <div class="row">
                    <?php 
                        $services_box = get_field('service_items', 'options');
                        if($services_box) : 
                            foreach($services_box as $service_box) :
                                $service_image          = $service_box['service_image'];
                                $service_title          = $service_box['service_title'];
                                $service_description    = $service_box['service_description'];
                                $service_button_text    = $service_box['service_button_text'];
                                $service_button_link    = $service_box['service_button_link'];
                    ?>
                    <div class="col-sm-4 col-xs-12">
                        <div class="service-single text-center">
                            <div class="service-img">
                                <img src="<?php echo $service_image; ?>" alt="<?php echo $service_title; ?>" />
                            </div><!--/.service-img-->
                            <div class="service-txt">
                                <h2>
                                    <a href="<?php echo $service_button_link; ?>">
                                        <?php 
                                            if( $service_title ) {
                                                echo $service_title;
                                            }
                                        ?>
                                    </a>
                                </h2>
                                <p>
                                    <?php 
                                        if( $service_description ) {
                                            echo $service_description;
                                        }
                                    ?>
                                </p>
                                <a href="<?php echo $service_button_link; ?>" class="service-btn">
                                    <?php 
                                        if( $service_button_text ) {
                                            echo $service_button_text;
                                        }
                                    ?>
                                </a>
                            </div><!--/.service-txt-->
                        </div><!--/.service-single-->
                    </div><!--/.col-->
                    <?php 
                        endforeach;
                        endif;
                    ?>
                </div><!--/.row-->
            </div><!--/.service-content-one-->
        </div><!--/.service-details-->
    </div><!--/.container-->

</section><!--/.service-->
<!--service end-->