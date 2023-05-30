
<?php
get_header();

?>
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<p>
						<?php dynamic_sidebar('sidebar'); ?>
					</p>
				</div>
				<div>
					<p>
						<?php dynamic_sidebar('categories'); ?>
					</p>
				</div>
				<div>
					<p>
						<?php dynamic_sidebar('testimonials'); ?>
					</p>
				</div>
			</div>

			<div class="main">
				<h1><?php single_post_title(); ?></h1>

				<?php while(have_posts()) {
					the_post();
					$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
					
				?>
				<ul class="news">
					<li>
						<div class="box">
							<a href="<?php echo get_permalink(); ?>"><img src="<?php echo $imagepath[0]; ?>" alt="Img" height="245" width="213"></a>
						</div>
						<p class="info">
							<?php echo get_the_date(); ?> by <span class="author"><?php echo get_the_author_meta('display_name', $author_id); ?></span>
						</p>
						<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
						<p>
							<?php echo wp_trim_words( get_the_content(), 10, '...' ); ?>
						</p>
						<p><a href="<?php the_permalink(); ?>" class="more">Read More</a></p>
					</li>
				</ul>
				<?php  } ?> 
			</div>
		</div>
	</div>

	<?php get_footer() ?>