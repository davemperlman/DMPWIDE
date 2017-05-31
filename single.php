<?php get_header(); ?>
   <section class="content">
      <?php if(have_posts()): ?>
         <?php while(have_posts()): the_post(); ?>
            <section class="post-image">
               <?php the_post_thumbnail(); ?>
            </section>
            <h2><?php the_title(); ?></h2> 
            <span id="thedate"><?php the_date(); ?></span>
               <article class="blog-post">
                  <section class="description">
                     <p><?php the_content(); ?></p>
                     <?php the_tags(); ?>
                  </section>
               </article>
         <?php endwhile;?>
      <?php endif;?>
   </section>
    <div class="pagination"><span id="next"><?php next_post_link('%link', 'Last') ?></span><span id="prev"><?php previous_post_link('%link', 'Next') ?></span>
             </div>
<?php get_footer(); ?>