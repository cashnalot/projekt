<?php get_header(  ) ?>
    <div class="row">
        <div class=" col-lg-1 col-md-1 col-sm-1 col-">
            <p class="empty-holder"></p>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col- mainBackground">
            <?php
                $query = new WP_Query(array(
                'category_name'=> 'technologia',
                ));

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
            ?>
                        <?php the_title('<h1>','</h1>') ?>
                        <?php the_excerpt(); ?>
                        <div class="link">
                            <a href="<?php the_permalink(); ?>">Więcej...</a>
                        </div>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                <?php echo "brak newsow kategorii technologia"; ?>
                
                <?php endif ?>
        </div>
        <div class=" col-lg-1 col-md-1 col-sm-1 col-"> 
        <p class="empty-holder"></p>
        </div>
    </div>
<?php get_footer( ) ?>