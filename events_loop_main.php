<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$loop = new WP_Query( array(
	'post_type'      => 'music_event',
	'posts_per_page' => isset($_GET['more']) ? '-1' : '5', 
	'category_name'  => 'shows',
	'paged'			 => $paged,
	'meta_query'     => array(
		array(
			'key'       => 'event-date',
			'value'     => date('Y-m-d'),
			'compare'   => '>=',
		)
	),
	'orderby'  => 'meta_value',
	'meta_key' => 'event-date',
	'order'    => 'ASC'
	)
);

global $wp_query;
$temp_wp_query = $wp_query;
$wp_query = null;
$wp_query = $loop;


// Archive Loop
if($loop->have_posts()) :
	while ( $loop->have_posts() ) :
		$loop->the_post(); ?>
	<?php $venueId = get_post_meta( get_the_ID(), 'meta-box-venue')[0]; ?>
		<a id="event-link" href="<?php the_permalink(); ?>">
			<?php echo the_post_thumbnail(); ?>
		</a>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php $wp_query = $temp_wp_query ?>