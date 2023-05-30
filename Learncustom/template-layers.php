
<?php
/*Template Name: layers*/
get_header();
$args = array(
    'post_type'   => 'layers',
    'posts_per_page' => 4,
);
 ?>

   <div id="contents">
      <div class="clearfix">
         <div class="sidebar">
            <div>
               <h2><?php the_title(); ?></h2>
               <p>
                 <?php the_content(); ?>
               </p>
               
            </div>
            <div>
               
               <p>
                  <?php dynamic_sidebar('testimonials'); ?>
               </p>
            </div>
         </div>
         
         <div class="main">
            <h1><?php the_title(); ?></h1>
            <div class="section">

<?php $custom_query = new WP_Query( $args );

// The Loop
if ( $custom_query->have_posts() ) {
    while ( $custom_query->have_posts() ) {
        $custom_query->the_post();
$lawyerposition = get_field('lawyer_position');
               if (!empty($lawyerposition)) { ?>
      <h2><?php echo $lawyerposition; ?></h2>

   <?php }

        ?>

            <ul>
                  <li>
                     <div class="frame4">
                        <div class="box">
                        	<?php 

                        	    $imagepath = wp_get_attachment_image_src(
                        		get_post_thumbnail_id(), 'large'); 

                        		?>

                           <img src="<?php echo $imagepath[0] ?>" alt="Img" height="94" width="90">
                        </div>
                     </div>
                     <p>
                        <b><?php the_title(); ?></b> <?php the_excerpt(); ?>
                     </p>
                  </li>
                  
               </ul>
<?php }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
   </div>
 
<?php get_footer();