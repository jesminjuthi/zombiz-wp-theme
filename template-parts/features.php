<!--we-do start -->
<section class="we-do">
	<div class="container">
		<div class="we-do-details">
			<div class="section-header text-center">
				<?php
					$section_title 		= get_field('f_title', 'options');
					$section_subtitle 	= get_field('f_subtitle', 'options');
				?>
				<h2> 
					<?php
						if($section_title) {
							echo $section_title;
						}						
					?>
				</h2>
				<p>
					<?php
						if($section_title) {
							echo $section_subtitle;
						}		
					?>
				</p>
			</div><!--/.section-header-->
			<div class="we-do-carousel">
				<div class="row">
					<?php
						$feature_items = get_field('f_boxes', 'options');
						if ($feature_items) :
						foreach ($feature_items as $item):
							$f_img = $item['f_image'];
							$f_title = $item['f_box_title'];
							$f_sub = $item['f_box_subtitle'];
					?>
					<div class="col-sm-4 col-xs-12">
						<div class="single-we-do-box text-center">
							<div class="we-do-description">
								<div class="we-do-info">
									<div class="we-do-img">
										<img src="<?php echo $f_img; ?>"
											alt="image of consultency" />
									</div><!--/.we-do-img-->
									<div class="we-do-topics">
										<h2>
											<a href="#">
												<?php 
													echo $f_title;
												?>
											</a>
										</h2>
									</div><!--/.we-do-topics-->
								</div><!--/.we-do-info-->
								<div class="we-do-comment">
									<p>
										<?php 
											echo $f_sub;
										?>
									</p>
								</div><!--/.we-do-comment-->
							</div><!--/.we-do-description-->
						</div><!--/.single-we-do-box-->
					</div><!--/.col-->
					<?php
						endforeach;
						endif;
					?>
				</div><!--/.row-->
			</div><!--/.we-do-carousel-->
		</div><!--/.we-do-details-->
	</div><!--/.container-->

</section><!--/.we-do-->
<!--we-do end-->