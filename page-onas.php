<?php get_header();?>

<?php if (have_posts()):
    while (have_posts()):
        the_post();?>
            <div class="row">
                <div class=" col-lg-1 col-md-1 col-sm-1 col-">
                    <p class="empty-holder"></p>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col- mainBackground">
                    <?php the_title('<h2>', '</h2>');?>
                    <?php the_content();?>
                </div>

                <div class=" col-lg-1 col-md-1 col-sm-1 col-">

                </div>
            </div>
				<?php endwhile;?>
		<?php else: ?>
<?php endif;?>

<?php get_footer();?>