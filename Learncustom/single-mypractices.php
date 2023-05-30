<?php
get_header();

?>
 
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2><?php $post_type = get_post_type_object(get_post_type());
echo $post_type->label; echo post_type_archive_title(); ?></h2>
					<ul>
						
							<?php dynamic_sidebar('practice_sidebar'); ?>
						
					</ul>
				</div>
				<div>
					
					<p>
						<?php dynamic_sidebar('testimonials'); ?>
					</p>
				</div>
			</div>
<div class="main">
				<h1><?php the_title(); ?></h1>
				<div class="frame3">
					<?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
					<div class="box">
						<img src="<?php echo $imagepath[0] ?>" alt="Img" height="199" width="584">
					</div>
				</div>
				<p>
					<?php the_content(); ?>
				</p>
</div>
</div></div>
<?php get_footer() ?>