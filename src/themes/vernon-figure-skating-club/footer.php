<footer class="pt-2 pb-1">
    <section class="footer-detail">
        <div class="container">
            <div class="row pt-1 pb-1">
                <div class="col-md-8 text-center text-md-start">
                    <div class="d-md-flex align-items-center">
                        <a href="https://www2.gov.bc.ca/gov/content/home" target="_blank" class="text-decoration-none">
                            <img src="<?php bloginfo('template_url'); ?>/images/province-bc-logo.svg"
                                 alt="<?php bloginfo('name'); ?> - Logo"
                                 class="img-fluid footer-bc-logo">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                        </a>
                        <p class="small ms-md-1 muted px-1 pt-1 p-md-0 mb-md-0 footer-max-md-width"><?php the_field('acknowledgement_text', 'option')?></p>
                    </div>
                </div><!-- col -->
                <div class="col-md-4 text-center text-md-end">
                    <a href="https://skatecanada.ca/" target="_blank" class="text-decoration-none">
                        <img src="<?php bloginfo('template_url'); ?>/images/skatecanada-logo.svg"
                             alt="<?php bloginfo('name'); ?> - Logo"
                             class="img-fluid footer-skatecanda-logo">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                    </a>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start muted small">
                    <p class="mb-0 px-50">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-md-6 text-center text-md-end muted small">
                    <p class="mb-0 px-1">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>
