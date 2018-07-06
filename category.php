<?php get_header(); ?>
<div class="row">
        <div class=" col-lg-1 col-md-1 col-sm-1 col-">
            <p class="empty-holder"></p>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col- mainBackground">
            <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
            <?php the_title('<h2>','</h2>'); ?> 
                    <div class="img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="excerpt">
                        <?php the_excerpt();?>
                    </div>
                    <div class="link">
                        <a href="<?php the_permalink(); ?>">Więcej...</a>
                    </div>
             <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            </div>
        <div class=" col-lg-1 col-md-1 col-sm-1 col-"> 
        <p class="empty-holder"></p>
        </div>
    </div>
<?php get_footer(); ?>