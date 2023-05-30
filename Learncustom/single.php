<?php
get_header();
the_post();
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
				<?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
				<!-- <?php $author_id=$post->post_author; ?> -->
				<div class="images">
					<img src="<?php echo $imagepath[0] ?>" alt="Img" height="237" width="205">
				</div>
				<div class="details">
					<p class="info">
						<?php echo get_the_date(); ?> by <span class="author"><?php the_author(); ?><!-- <?php the_author_meta( 'user_nicename' , $author_id ); ?> --></span> <span><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?></span>
					</p><br>
					<h2><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
					<p>
						<?php the_content(); ?>
					</p>
				</div>
				<?php comments_template( '/custom-templates/alternative-comments.php' ); ?>
			</div>
		</div>
	</div>
	<?php get_footer() ?>