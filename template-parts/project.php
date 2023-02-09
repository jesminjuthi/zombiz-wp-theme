<!--project start-->
<section id="project" class="project">
    <div class="container">
        <div class="project-details">
            <div class="project-header text-left">
                <?php  
                    $project_sec_title      = get_field('section_title', 'options');
                    $project_sec_subtitle   = get_field('section_subtitle', 'options');
                ?>
                <h2>
                    <?php 
                        if($project_sec_title) {
                            echo $project_sec_title;
                        }
                    ?>
                </h2>
                <p>
                    <?php 
                        if($project_sec_subtitle) {
                            echo $project_sec_subtitle;
                        }
                    ?>
                </p>
            </div>
            <!--/.project-header-->
            <div class="project-content">
                <div class="gallery-content">
                    <div class="isotope">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="row">
                                <?php 
                                    $args = [
                                        'post_type'         => 'project', 
                                        'posts_per_page'    => 3,
                                    ];
                                    $project_query = new WP_Query($args);
                                    while($project_query -> have_posts()) : $project_query -> the_post();
                                    $project_link = get_field('project_link');
                                ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <?php 
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large' );
                                                }
                                            ?>
                                            <div class="isotope-overlay">
                                                <a href="<?php echo $project_link; ?>">
                                                    <span class="lnr lnr-link"></span>
                                                </a>
                                                <h3>
                                                    <a href="<?php echo $project_link; ?>">
                                                        <?php 
                                                            the_title();
                                                        ?>
                                                    </a>
                                                </h3>
                                                <?php 
                                                    the_content();
                                                ?>
                                            </div><!-- /.isotope-overlay -->
                                        </div><!-- /.item -->
                                    </div><!-- /.col -->
                                    <?php 
                                        endwhile;
                                    ?>
                                </div><!-- /.row-->
                            </div><!-- /.col -->
                            
                        </div><!-- /.row -->

                    </div>
                    <!--/.isotope-->
                </div>
                <!--/.gallery-content-->
            </div>
            <!--/.project-content-->
        </div>
        <!--/.project-details-->
        <div class="project-btn text-center">
            <a href="<?php echo get_post_type_archive_link('project'); ?>" class="project-view">view all
            </a>
        </div>
        <!--/.project-btn-->
    </div>
    <!--/.container-->

</section>
<!--/.project-->
<!--project end-->