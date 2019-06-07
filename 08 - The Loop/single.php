<?php get_header() ?>
<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title() ?></h1>
    <p>Posted by <?php the_author() ?> on <?php the_date() ?></p>
    <?php the_content() ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
