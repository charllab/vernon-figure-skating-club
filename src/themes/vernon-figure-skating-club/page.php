<?php
get_header();
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<main>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8">
                <h1 class="text-capitalize"><?php the_title(); ?></h1>

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
</main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
