<!-- Start Get Daynamic Header -->
<?php 
get_header(); 
the_post();
?>
<!-- Start Get Daynamic Header -->
<style type="text/css">
	
</style>
<div id="contents">
		<div class="clearfix">
			
			<!-- Start Get Daynamic Page Title -->	
			<h1><?php echo the_title(); ?></h1>
			<!-- End Get Daynamic Page Title -->	
			<div class="frame2">
				<div class="box">
					<!-- Start Get featured image first method -->
					<!-- <?php the_post_thumbnail('large'); ?> -->

                     <!-- Start Get featured image Second method -->
					<?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
					<!-- End Get featured image one method -->

					<img src="<?php echo $imagepath[0] ?>" alt="Img" height="298" width="924">
				</div>
			</div>
			<div class="aboutcontent">	
			<!-- Start Get Content in Daynamic -->			
					<p><?php echo the_content(); ?></p>
					<!-- End Get Content in Daynamic -->
			</div>						
		</div>
	</div>
	<!-- Start Get Daynamic Footer -->	
<?php get_footer(); ?>
	