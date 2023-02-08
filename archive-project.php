<?php
	get_header();
?>

<!--about-part start-->
<section class="about-part project-part">
    <div class="container">
        <div class="about-part-details text-center">
            <h2>project</h2>
            <div class="about-part-content">
                <div class="breadcrumbs">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><a href="index.html">home</a><span>//</span></li>
                            <li><a href="project.html">project</a></li>
                        </ol>
                        <!--/.breadcrumb-->
                    </div>
                    <!--/.container-->
                </div>
                <!--/.breadcrumbs-->
            </div>
            <!--/.about-part-content-->
        </div>
        <!--/.about-part-details-->
    </div>
    <!--/.container-->

</section>
<!--/.about-part-->
<!--about-part end-->

<!--project start-->
<section id="project" class="project">
    <div class="container">
        <div class="project-details">
            <div class="project-header text-left">
                <h2>Our Finished Projects</h2>
                <p>
                    Pallamco laboris nisi ut aliquip ex ea commodo consequat.
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
                                        'posts_per_page'    => -1,
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
                                                <p>
                                                    <?php 
                                                        the_content();
                                                    ?>
                                                </p>
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
    </div>
    <!--/.container-->

</section>
<!--/.project-->
<!--project end-->

<?php
	get_footer();
?>