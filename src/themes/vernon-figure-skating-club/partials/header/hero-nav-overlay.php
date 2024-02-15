<header id="header" class="position-relative hero-nav-overlay z-index-200">
    <nav class="navbar navbar-expand-lg">

        <div class="container d-flex">
            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div><!-- nav-logo -->
            <div class="contact-details d-flex align-items-center justify-content-center">
                <div>
                    <p class="d-none d-md-block mb-0 me-50">tel: <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"><?php echo get_field('phone_number', 'option'); ?></a></p>
                    <a class="text-decoration-none social-link text-body p-0 my-0 d-md-none" style="margin-right: 4px" target="_blank" href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>">
                        <i class="fas fa-mobile-alt" aria-hidden="true">
                            <span class="sr-only">Phone</span>
                        </i>
                    </a>
                </div>
                <div class="social-links px-250">
                    <?php while (have_rows('social_links', 'options')): the_row(); ?>
                        <a class="text-decoration-none social-link text-body p-0 my-0"
                           style="margin-right: 4px" target="_blank" href="<?php the_sub_field('url'); ?>">
                            <i class="<?php the_sub_field('icon_class'); ?>">
                                <span class="sr-only"><?php the_sub_field('label'); ?></span>
                            </i>
                        </a>
                    <?php endwhile; ?>
                </div><!-- social-links -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                        aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div><!-- contact-details -->
        </div><!-- -container -->


        <div class="container">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container_class' => 'collapse navbar-collapse d-lg-flex',
                'container_id' => 'mainMenu',
                'menu_class' => 'navbar-nav me-lg-auto align-items-lg-center',
                'fallback_cb' => '',
                'menu_id' => 'main-menu',
                'walker' => new bootstrap_5_wp_nav_menu_walker(),
            ]); ?>

        </div><!-- container-->
    </nav>
</header>
