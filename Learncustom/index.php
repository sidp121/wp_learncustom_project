
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
							<span><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?></span>
							 </p><br>
						<h2><a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
						<p>
							<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
						</p>
						<a href="<?php the_permalink(); ?>" class="more">Read More</a>
					</li>
				</ul>
				<?php  } ?> 


   <!-- Add the pagination functions here. → -->

   <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post();  ?>
   <!-- the rest of your theme's main loop -->
  <?php endwhile; ?>
  <!-- End of the main loop -->
  <!-- Or add the pagination functions here. -->
  <div class="nav-previous alignleft"><?php previous_posts_link( 'Older Posts' ); ?></div>
  <div class="nav-next alignright"><?php next_posts_link( 'Newer Posts' ); ?></div>
  <?php else : ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <!-- End Pagination -->

			</div>
		</div>
	</div>

	<?php get_footer() ?>