<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> | <?php the_title(); ?> <?php if (is_front_page()) {
		 bloginfo('description'); } ?></title>

		   <!-- *****Import Custom CSS File Third Method***** -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mainstyle.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
	
	<?php wp_head(); ?>
</head>
<body <?php echo get_body_class(); ?>>
	<!-- Start Display for logo image -->
	<?php $logoimage= get_header_image(); ?>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimage; ?>" alt="LOGO" height="52" width="362"></a>
			</div>

		<!-- End Display for logo image -->


			<ul class="navigation nav">
				<li></li>
				  <!-- Start Create for Daynamic Menu -->
				<?php wp_nav_menu(
               array('theme_location' => 'primary_menu')
				) ?>

					  <!-- End Create for Daynamic Menu -->
				
			</ul>
		</div>
	</div>
	<?php wp_footer(); ?>