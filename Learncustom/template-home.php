<?php
// Template Name: home
get_header();

?>

	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<?php dynamic_sidebar('home_page'); ?>
				<div class="detail">
					<?php dynamic_sidebar('home_page_text'); ?>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">	
				<div class="testimonial">
					
					<p>
					<?php dynamic_sidebar('hometestimonials'); ?>

					</p>
					
				</div>

				<!-- ***** Get Home Page Title & Description ****** -->
				<h1><?php the_title(); ?></h1>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<div class="featured">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">

				<?php 
					$post_7 = get_post( 129 ); 
                    $title = $post_7->post_title;
                    $content=$post_7->post_content;
                    $link=get_permalink(129);
                    $image= get_the_post_thumbnail_url(129,'full');  
					 ?>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					
					<p>
						<b><?php echo $title; ?></b> <?php echo $content; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<?php 
					$post_7 = get_post(66); 
                    $title = $post_7->post_title;
                    $content=$post_7->post_content;
                    $link=get_permalink(66);
                    $image= get_the_post_thumbnail_url(66,'full');  
					 ?>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b> <?php echo $content; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<?php 
					$post_7 = get_post( 70 ); 
                    $title = $post_7->post_title;
                    $content=$post_7->post_content;
                    $link=get_permalink(70);
                    $image= get_the_post_thumbnail_url(70,'full');  
					 ?>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b> <?php echo $content; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<?php 
					$post_7 = get_post( 72 ); 
                    $title = $post_7->post_title;
                    $content=$post_7->post_content;
                    $link=get_permalink(72);
                    $image= get_the_post_thumbnail_url(72,'full');  
					 ?>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b> <?php echo $content; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>	
  <?php get_footer() ?>