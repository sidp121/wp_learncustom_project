<?php
// Template Name: contact us
get_header();

?>
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<?php while (have_posts()) : the_post();
                      
               $email= get_field('email_id');
               $phone=get_field('phone_number');
               $address=get_field('address1');
               $title=get_field('title_address');
               $fax=get_field('fax_number');
               $sidebartitle=get_field('sidebar_title');
               ?>

                    
					<h2><?php echo $sidebartitle; ?></h2>
					<ul class="contact">
						<li>
							<p>
								<?php if (!empty($address)) { ?>
								<span class="home"></span> <em><?php echo $title; ?></em> <?php echo $address; ?>
							<?php } ?>
							</p>
						</li>
						<li>
						<?php if (!empty($phone)) { ?>
   	                    <p class="phone">Phone: <?php echo $phone; ?></p>
                       <?php } ?>

						</li>
						<li>
							<?php if (!empty($fax)) { ?>
							<p class="fax">Fax: <?php echo $fax; ?>
							</p>
							<?php } ?>
						</li>
						<li>
	                     <?php if (!empty($email)) { ?>
   	                    <p class="mail">Email: <?php echo $email; ?></p>
                         <?php } ?>
						</li>
					</ul>
					<?php endwhile; ?> <!--  End of the loop. -->
				</div>
			</div>
			<div class="main">
				<h1><?php the_title(); ?></h1>
				

				 <form  class="message">
					<?php the_content(); ?>
				</form> 
			</div>
		</div>
	</div>
<?php get_footer(); ?>