
    <?php get_header( ); ?>



<div class="row">
    <div class=" col-lg-1 col-md-1 col-sm-1 col-">
        <p class="empty-holder"></p>
    </div>
    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col- mainBackground">
    <section class="news">
                    <?php
                        $query = new WP_Query(array(
                        'category_name'=> 'news',
                        'posts_per_page' => 4
                        ));

                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                                
                                ?>
                               <h1> <?php the_title() ?></h1>
                               <p> <?php the_content() ?></p>
                               
                            <?php endwhile ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else: ?>
                           <?php echo "brak news"; ?>
                        
                        <?php endif ?>
                        
                    </section>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-">
                            </div>
</div>

<?php get_footer(); ?>