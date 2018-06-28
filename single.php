<?php
get_header(); 

?>

    <section class="bg-light text-dark singleBackground">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col- gb-col-xl-12  mainBackground">
                    <?php
                    
                        the_post();
                        /* Post */
                          the_title('<h1>', '</h1>');
                          the_content();
                    ?>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>