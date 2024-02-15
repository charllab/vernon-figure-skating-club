<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <?php if (have_posts()) : ?>
                            <?php /* Start the Loop */ ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <h2 class="text-capitalize"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- col -->

                    <div class="col-lg-4">
                        <div class="pt-150 pb-1 px-1">
                            <h3>Contact Information</h3>
                            <?php
                            $removethese = array("(", " ", ")", "-");
                            ?>
                            <table class="table contact-details">
                                <tr>
                                    <td><strong>Phone: </strong></td>
                                    <td>
                                        <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>E-mail: </strong></td>
                                    <td>
                                        <a href="mailto:<?php echo get_field('email_address', 'option'); ?>"><?php echo get_field('email_address', 'option'); ?></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Mailing Address: </strong></td>
                                    <td><?php echo get_field('mailing_address', 'option'); ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Arena Address: </strong></td>
                                    <td><?php echo get_field('physical_address', 'option'); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="px-0">
                            <?php
                            echo get_field('map_embed_code', 'option');
                            ?>
                        </div><!-- px-0 -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
    </main>

<?php get_footer();
