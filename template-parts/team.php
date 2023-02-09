<!--team start -->
<section id="team" class="team">
    <div class="container">
        <div class="team-details">
            <div class="project-header team-header text-left">
                <?php 
                    $team_sec_title     = get_field('team_section_title', 'options');
                    $team_sec_subtitle  = get_field('team_section_subtitle', 'options');
                ?>
                <h2>
                    <?php 
                        if($team_sec_title) {
                            echo $team_sec_title;
                        }
                    ?>
                </h2>
                <p>
                    <?php 
                        if($team_sec_subtitle) {
                            echo $team_sec_subtitle;
                        }
                    ?>
                </p>
            </div>
            <!--/.project-header-->
            <div class="team-card">
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel  team-carousel">
                            <?php 
                                $args = [
                                    'post_type'         => 'team_member',
                                    'posts_per_page'    => '6'
                                ];
                                $team_query = new WP_Query($args);
                                while($team_query->have_posts()) : $team_query->the_post();
                                $team_button_text = get_field('team_button_text');
                                $button_url = get_field('button_url');
                            ?>
                            <div class="col-sm-3 col-xs-12">
                                <div class="single-team-box team-box-bg">
                                    <?php 
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                    ?>
                                    <div class="team-box-inner">
                                        <h3>
                                            <?php 
                                                the_title();
                                            ?>
                                        </h3>
                                        <p class="team-meta">
                                            <?php 
                                                the_content();
                                            ?>
                                        </p>
                                        <a href="<?php echo $button_url; ?>" class="learn-btn">
                                            <?php 
                                                if($team_button_text) {
                                                    echo $team_button_text;
                                                }
                                            ?>
                                        </a>
                                    </div>
                                    <!--/.team-box-inner-->

                                </div>
                                <!--/.single-team-box-->
                            </div>
                            <?php 
                                endwhile;
                            ?>
                            <!--.col-->
                        </div>
                        <!--/.team-carousel-->
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.team-card-->
        </div>
        <!--/.team-details-->
    </div>
    <!--/.container-->

</section>
<!--/.team-->
<!--team end-->