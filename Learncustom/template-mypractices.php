<?php 
// Template Name: Practices
get_header(); 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type'   => 'mypractices',
    'posts_per_page' => 4,
    'paged' => $paged,
);
?>
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2><?php the_title(); ?></h2>
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

				<p>
					<?php the_content(); ?>
				</p>
				<ul class="practices">
					<?php
// Build Query to fetch 6 news post types
// $args = array(
//     'post_type'   => 'mypractices',
//     'posts_per_page' => 4,
// );
$custom_query = new WP_Query( $args );

// The Loop
if ( $custom_query->have_posts() ) {
    while ( $custom_query->have_posts() ) {
        $custom_query->the_post();


        ?>
					<li class="frame5">
						<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?> 
					<a href="<?php the_permalink(); ?>" class="box"><img src="<?php echo $featured_img_url ?>" height="198" width="265"><span><?php the_title(); ?></span></a>
					</li>
					<?php }

} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata(); ?>
				</ul>
				<?php
                // Custom pagination
                echo '<div class="custom-pagination">';
                echo paginate_links( array(
                    'total' => $custom_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => __( '<< Previous' ),
                    'next_text' => __( 'Next >>' ),
                ) );
                echo '</div>';
                ?>
			</div>
		</div>
	</div>
			<!-- Start Get Daynamic Footer -->	
<?php get_footer(); ?>