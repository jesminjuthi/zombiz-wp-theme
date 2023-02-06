<section id="menu">
    <div class="container">
        <div class="menubar">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <?php 
                            $logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                    echo '<img src="'. esc_url( $logo[0] ) .'">';
                            } else {
                                    echo '<h3>'. get_bloginfo( 'name' ) .'</h3>';
                            }
                        ?>
                    </a>
                </div><!--/.navbar-header -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        $header_menu = wp_nav_menu(
                            array(
                                'theme_location'        => 'primary_menu',
                                'container'             => 'ul',
                                'menu_class'            => 'nav navbar-nav navbar-right',
                                'echo'                  => false
                            )
                        );
                        $header_menu = str_replace('menu-item', 'menu-item smooth-menu', $header_menu);
                        echo $header_menu;
                    ?>
                    <!-- <ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">
										<span class="lnr lnr-cart"></span>
									</a>
								</li>
								<li class="search">
									<form action="">
										<input type="text" name="search" placeholder="Search....">
										<a href="#">
											<span class="lnr lnr-magnifier"></span>
										</a>
									</form>
								</li>
							</ul>/ ul -->
                </div><!-- /.navbar-collapse -->
            </nav><!--/nav -->
        </div><!--/.menubar -->
    </div><!-- /.container -->
</section><!--/#menu-->