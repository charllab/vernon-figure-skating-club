<?php get_header(); ?>
    <section>
        <div class="container py-2">
            <div class="row">

                    <?php
                    // Arguments for the query
                    $args = array(
                        'post_type' => 'program', // Change to your custom post type name
                        'posts_per_page' => -1, // -1 to fetch all posts
                    );

                    // The Query
                    $the_query = new WP_Query($args);

                    // The Loop
                    if ($the_query->have_posts()) {

                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            // Get the current post URL
                            $post_url = get_permalink();

                            echo '<div class="col-lg-6 col-xl-4">';
                            echo '<div class="pe-md-2 pe-lg-4 pt-3 position-relative">';
                            // Wrap the title in a link
                            $siloute_icon = get_field('siloute_icon');
                            if ($siloute_icon) {
                                // Assuming 'siloute_icon' is an image URL, also make the image a clickable link
                                echo '<div class="the--icon position-absolute">';
                                echo '<img src="' . esc_url($siloute_icon['url']) . '" alt="' . get_the_title() . ' icon" class="object-fit-fill">';
                                echo '</div>';
                            }
                            echo '<h2>' . get_the_title() . '</h2>';
                            // Get the post excerpt
                            echo '<p class="standard-height">' . get_the_excerpt() . '</p>';
                            // Get the ACF field 'siloute_icon'
                            echo '<p><a href="' . esc_url($post_url) . '" class="btn btn-primary">Learn More</a></p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        // No posts found
                        echo '<p>No programs found.</p>';
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                    ?>
            </div><!-- row -->
        </div><!-- container -->
    </section>
<?php get_footer();
