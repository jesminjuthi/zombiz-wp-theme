<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- META DATA -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
			wp_head();
		?>
    </head>	
	<body>
		<?php 
			get_template_part('template-parts/topbar');
			get_template_part('template-parts/menu');
		?>