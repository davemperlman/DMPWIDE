<?php

get_header(); 
?>
	<?php if( is_front_page() ): ?>
	    <div class="slider">
	       <?php echo do_shortcode('[slick-carousel-slider centermode="true"]'); ?>
	    </div> 
	<?php endif; ?>

	<section class="shows">
		<h2 id="upcoming-title">Upcoming Shows <?php echo isset($_GET['more']) ? '<a id="amount" href="?">-</a>' : '<a id="amount" href="?more=true">+</a>'; ?></h2>
		<!-- Describes how Event archive is displayed -->
		<?php get_template_part('events_loop'); ?>
	</section>

	<aside id='instagram'>
		<h2>Instagram Photos</h2>
		<?php echo do_shortcode('[instagram-feed]'); ?>
	</aside>

	<h2 id="latest">Latest from Dave</h2>
	<section id='posts'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="post">
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
					<section class="post-info">
						<p class="post-date"><?php echo get_the_date(); ?></p>
						<h2 class="post-title"><?php the_title(); ?></h2>
					</section>
					<?php the_excerpt(); ?>
				</a>
			</section>
		<?php endwhile; endif; ?>
	</section>

	<div class="fb-like" data-href="http://www.facebook.com/entertainmentmaine" data-width="100px" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
		</div>

	<?php get_footer(); ?>
