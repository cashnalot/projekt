<?php get_header(); ?>

<?php if ( have_posts() ) :
while ( have_posts() ) :
  the_post(); ?>
  <h2><?php the_title(); ?> </h2?>
        <div class="img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="excerpt">
        <?php the_excerpt();?>
        </div>
        <div class="link">
            <a href="category.php "><?php the_permalink(); ?> </a>
        </div>
       
        <?php get_sidebar(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>