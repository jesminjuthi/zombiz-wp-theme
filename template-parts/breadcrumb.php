<!--about-part start-->
<?php 
    $breadcrumb_bg = get_field('breadcrumb_background_image', 'options');
?>
<section class="about-part project-part" style="background-image:url(<?php echo $breadcrumb_bg; ?>);" >
    <div class="container">
        <div class="about-part-details text-center">
            <h2>project</h2>
            <div class="about-part-content">
                <div class="breadcrumbs">
                    <div class="container">
                        <?php 
                            get_the_breadcrumb();
                        ?>
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