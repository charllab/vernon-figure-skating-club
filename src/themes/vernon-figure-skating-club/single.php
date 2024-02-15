<?php
get_header();
?>

    <main>

        <?php
        // Start the loop.
        while (have_posts()) : the_post(); ?>

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <h1 class="blog-article-header"><?php echo the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div><!-- col -->
                    <div class="col-lg-3">
                        <div class="position-relative img--holder">
                            <?php if ( has_post_thumbnail() ) { // check if the post/page has a Post Thumbnail assigned to it.
                                the_post_thumbnail('full', ['class' => 'the--img']); // displays the full size of the image.
                            }?>
                        </div><!-- img--holder-->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        <?php endwhile; // end of the loop. ?>
    </main>

<?php get_footer();
