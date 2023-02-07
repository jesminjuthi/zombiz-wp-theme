<?php 
    $topbar = get_field('show_or_hide_topbar', 'options');
    if($topbar) { ?>
        <section id="home" class="header">
    <div class="container">
        <div class="header-left">
            <ul class="pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> 
                        <?php 
                            $phone_number = get_field('phone_number', 'options');
                            if($phone_number) {
                                echo $phone_number;
                            }
                        ?>
                    </a>
                </li><!--/li-->
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <?php 
                            $email_address = get_field('email_address', 'options');
                            if($email_address) {
                                echo $email_address;
                            }
                        ?>
                    </a>
                </li><!--/li-->
            </ul><!--/ul-->
        </div><!--/.header-left -->
        <div class="header-right pull-right">
            <ul>
                <li class="reg">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                        Register
                    </a>
                    /
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                        Log in
                    </a>

                    <!-- small modal -->
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="fa fa-close"></i>
                                        </span>
                                    </button>
                                    <h4 class="modal-title" id="mySmallModalLabel">
                                        Sign In
                                    </h4>
                                    <form class="sm-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <label><input type="checkbox" name="personality"> Remenber Me</label>
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- large modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="fa fa-close"></i>
                                        </span>
                                    </button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Register</h4>
                                    <form class="lg-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                        <label>Email :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><!--/li -->
                <li>
                    <div class="social-icon">
                        <?php 
                            $social_icons = get_field('add_social_icons', 'options');
                            if($social_icons) :
                        ?>
                        <ul>
                        <?php foreach ($social_icons as $icon) { ?>
                            <li>
                                <a href="<?php echo $icon['social_link']; ?>">
                                    <i class="<?php echo $icon['social_icon'];?>"></i>
                                </a>
                            </li>
                           <?php } ?>
                        </ul><!--/.ul -->
                        <?php 
                            endif;
                        ?>
                    </div><!--/.social-icon -->
                </li><!--/li -->
            </ul><!--/ul -->
        </div><!--/.header-right -->
    </div><!--/.container -->
</section><!--/.header-->
   <?php }
?>


