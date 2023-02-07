<!--about-us start -->
<section id="about" class="about-us">
	<div class="container">
		<div class="about-us-content">
			<div class="row">
				<div class="col-sm-6">
					<div class="single-about-us">
						<div class="about-us-txt">
							<?php
								$abt_title = get_field('about_title', 'options');
								$abt_subtitle = get_field('about_description', 'options');
								$abt_link = get_field('about_button_link', 'options');
								$abt_btn = get_field('about_button_text', 'options');
								$abt_img = get_field('about_image', 'options');
							?>
							<h2>
								<?php 
									if($abt_title) {
										echo $abt_title;
									}
								?>
							</h2>
							<p>
								<?php 
									if($abt_title) {
										echo $abt_subtitle;
									}
								?>
							</p>
							<div class="project-btn">
								<a href=" <?php echo $abt_link; ?> " class="project-view">
									<?php 
										if($abt_btn) {
											echo $abt_btn;
										}
									?>
								</a>
							</div><!--/.project-btn-->
						</div><!--/.about-us-txt-->
					</div><!--/.single-about-us-->
				</div><!--/.col-->
				<div class="col-sm-6">
					<div class="single-about-us">
						<div class="about-us-img">
							<img src="<?php echo $abt_img; ?>" alt="about images">
						</div><!--/.about-us-img-->
					</div><!--/.single-about-us-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.about-us-content-->
	</div><!--/.container-->

</section><!--/.about-us-->
<!--about-us end -->