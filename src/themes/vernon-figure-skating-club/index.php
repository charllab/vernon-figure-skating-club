<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- col -->
            <div class="col-lg-3">
                <div class="position-relative img--holder">
                    <?php if ( has_post_thumbnail() ) { // check if the post/page has a Post Thumbnail assigned to it.
                        the_post_thumbnail('full', ['class' => 'position-absolute']); // displays the full size of the image.
                    }?>
                </div><!-- img--holder-->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</main>

<?php get_footer(); ?>
