<?php get_header(); ?>
    <main class="font-page">

        <?php
        $slider = get_field('hero_slider');
        $hero_sliders = $slider['hero_slider'];
        ?>

        <?php if (!empty($slider)): ?>
            <section class="pt-1 pt-md-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                <?php foreach ($hero_sliders as $hs): ?>
                                    <?php
                                    $img = $hs['slider_image'];
                                    $link = $hs['slider_link'];
                                    ?>
                                    <div class="item">
                                        <?php if (!empty($link)) echo '<a href="' . $link['url'] . '">'; ?>
                                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"
                                             class="img-fluid">
                                        <?php if (!empty($link)) echo '</a>'; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <section>
            <div class="container pt-1 py-md-2">

                <div class="d-none">

                <?php $hero = get_field('hero_section');
                $hero_content = $hero['hero_content'];
                $hero_image = $hero['hero_image'];
                ?>

                <?php if (!empty($hero)): ?>
                    <div class="row mb-2">
                        <div class="col-12 text-center blue-highlight">
                            <?php if (!empty($hero_content)):
                                echo $hero_content;
                            endif;
                            if (!empty($hero_image)):?>
                                <img
                                    src="<?php echo esc_url($hero_image['url']); ?>"
                                    alt="<?php echo $hero_image['alt'] ?>"
                                    class="img-fluid hero--img mx-auto d-block px-1"
                                >
                            <?php endif; ?>
                        </div><!-- col -->
                    </div><!-- row -->
                <?php endif; ?>

                </div><!-- d-none -->

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

                        $program_section = get_field('programs_section');
                        $program_title = $program_section['program_header'];

                        echo '<div class="col-12"><h2 class="text-uppercase text-center mb-2 mb-lg-3">' . $program_title . '</h2></div>';

                        while ($the_query->have_posts()) {


                            $the_query->the_post();
                            // Get the current post URL
                            $post_url = get_permalink();

                            echo '<div class="col-lg-6 col-xl-4">';
                            echo '<div class="pe-md-2 pe-lg-4 pt-2 pt-md-3 position-relative">';
                            // Wrap the title in a link
                            $siloute_icon = get_field('siloute_icon');
                            if ($siloute_icon) {
                                // Assuming 'siloute_icon' is an image URL, also make the image a clickable link
                                echo '<div class="the--icon position-absolute">';
                                echo '<img src="' . esc_url($siloute_icon['url']) . '" alt="' . get_the_title() . ' icon" class="object-fit-fill">';
                                echo '</div>';
                            }
                            echo '<h2 class="colorUps">' . get_the_title() . '</h2>';
                            // Get the post excerpt
                            echo '<p class="standard-height">' . get_the_excerpt() . '</p>';
                            // Get the ACF field 'siloute_icon'
                            echo '<p><a href="' . esc_url($post_url) . '" class="btn btn-primary">Learn More</a></p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        // No posts found
                        echo '<p>There are no programs available at the moment.</p>';
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                    ?>
                </div><!-- row -->
            </div><!-- container -->
        </section>
    </main>
<?php get_footer();
