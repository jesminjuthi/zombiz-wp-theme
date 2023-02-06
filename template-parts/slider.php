<!-- header-slider-area start -->
<section class="header-slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
                $slides = new WP_Query(array(
                    'post_type' => 'slider',
                    'posts_per_page' => -1
                ));
            ?>
            <?php
                $i = 0;
                while ($slides->have_posts()) : $slides->the_post();
            ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" <?php echo ($i == 0) ? 'class="active"' : ''; ?>></li>
            <?php $i++;
            endwhile; ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php 
                $j = 0;
                while ($slides->have_posts()) : $slides->the_post(); ?>
                <div class="item <?php echo ($j == 0) ? 'active' : ''; ?>">
                    <?php
                    $slider_image = get_field('slider_image');
                    if ($slider_image) :
                    ?>
                        <div class="single-slide-item slider-img" style="background-image:url(<?php echo $slider_image['url']; ?>);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-slide-item-content">
                                            <h2><?php the_title(); ?></h2>
                                            <p><?php the_content(); ?></p>
                                            <?php
                                                $slider_button_text = get_field('slider_button_text');
                                                $slider_button_two = get_field('slider_button_two');
                                                $slider_button_link = get_field('slide_button_link');
                                                $slider_button_link_two = get_field('slider_button_link_two');
                                            ?>
                                            <a href="<?php echo $slider_button_link; ?>" class="slide-btn"><?php echo $slider_button_text; ?></a>
                                            <a href="<?php echo $slider_button_link_two; ?>" class="slide-btn"><?php echo $slider_button_two; ?></a>
                                        </div><!-- /.single-slide-item-content-->
                                    </div><!-- /.col-sm-12-->
                                </div><!-- /.row-->
                            </div><!-- /.container-->
                        </div><!-- /.single-slide-item.slider-img -->
                    <?php endif; ?>
                </div><!-- /.item -->
            <?php $j++;
            endwhile;
            wp_reset_postdata(); ?>
        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="lnr lnr-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="lnr lnr-chevron-right"></span>
        </a>
    </div><!-- /.carousel-->

</section><!-- /.header-slider-area-->
<!-- header-slider-area end -->