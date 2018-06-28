<?php
get_header(); 

?>
<div class="row">
    <div class=" col-lg-1 col-md-1 col-sm-1 col-">
        <p class="empty-holder"></p>
    </div>
    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col- mainBackground">
    
   


        <?php if ( have_posts() ) :
        while ( have_posts() ) :
        the_post(); ?>
        <?php the_post_thumbnail('medium'); ?>
        <?php the_title('<h1>','</h1>'); ?> 
                <div class="content">
                    <?php the_content(); ?>
                </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
    </div>

    
    <div class=" col-lg-1 col-md-1 col-sm-1 col-">
        
    </div>
</div>
<?php get_footer(); ?>