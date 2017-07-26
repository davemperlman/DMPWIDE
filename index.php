<?php

get_header(); 
?>
	<!-- <?php if( is_front_page() ): ?>
	    <div class="slider">
	       <?php echo do_shortcode('[slick-carousel-slider]'); ?>
	    </div> 
	<?php endif; ?> -->
		<div class="main-banner">
			<img src="http://www.entertainmentmaine.com/wp-content/uploads/2016/11/DSC03134.jpg" alt="">
		</div>
		<h2 id="latest">Latest from Dave</h2>
		<section id='posts'>
			<?php $i = 1;if ( have_posts() ) : while ( have_posts() && $i < 5 ) : the_post(); ?>
				<section class="post">
					<a href="<?php the_permalink(); ?>">
					<div class="thumbnail-wrap" style="background: #000 url('<?php the_post_thumbnail_url(); ?>') no-repeat; background-size: cover;">
						
					</div>
						<div class="post-content">
							<section class="post-info">
								<p class="post-date"><?php echo get_the_date(); ?></p>
								<h2 class="post-title"><?php the_title(); ?></h2>
							</section>
						<?php the_excerpt(); ?>
						</div>
					</a>
				</section>
			<?php $i++; endwhile; endif; ?>
		</section>
	<div class="container">
		<section class="shows">
			<h2 id="upcoming-title">Upcoming Shows</h2>
			<!-- Describes how Event archive is displayed -->
			<?php get_template_part('events_loop'); ?>
			<?php echo isset($_GET['more']) ? '<a id="amount" href="?">^</a>' : '<a id="amount" href="?more=true">+</a>'; ?>
		</section>

		<aside id='instagram'>
			<h2>Instagram Photos</h2>
			<?php echo do_shortcode('[instagram-feed num=10]'); ?>
		</aside>

		<div class="fb-like" data-href="http://www.facebook.com/entertainmentmaine" data-width="100px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
			</div>
	</div>
	<?php get_footer(); ?>
