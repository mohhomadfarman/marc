<?php
/**
 * Theme Footer
 */
?>
<footer class="footer text-dark py-5" style="background:#EBE715">
    <div class="container ">
        <div class="row align-items-center pb-4" style="border-bottom:1px solid">
            <!-- Logo Section -->
            <div class="col-md-3 text-center text-md-start mb-4 mb-md-0">
                <?php 
                if (has_custom_logo()) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    if ($logo) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="footer-logo img-fluid">';
                    }
                }
                ?>
            </div>
            <style>
                .list-unstyled li a{
font-weight: 500;
font-size: 16px;
line-height: 150%;
letter-spacing: 2%;

                }
.list-unstyled.secon li a{
font-weight: 400;
font-size: 16px;
line-height: 150%;
letter-spacing: 2%;

}

            </style>

            <!-- Navigation Links -->
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(get_theme_mod('footer_menu_1_link', '#')); ?>" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_menu_1', 'Home')); ?></a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_menu_2', 'Franchise')); ?></a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_menu_3', 'Our Services')); ?></a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_menu_4', 'Blog')); ?></a></li>
                    <li><a href="#" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_menu_5', 'Contact Us')); ?></a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-md-3">
                <ul class="list-unstyled secon">
                    <li><img src="<?php echo get_template_directory_uri().'/assets/phone.svg'; ?>"> <a href="tel:<?php echo esc_attr(get_theme_mod('footer_phone', '226-526-4711')); ?>" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_phone', '226-526-4711')); ?></a></li>
                    <li><img src="<?php echo get_template_directory_uri().'/assets/email.svg'; ?>"> <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email', 'info@mosquitoman.ca')); ?>" class="text-dark text-decoration-none"><?php echo esc_html(get_theme_mod('footer_email', 'info@mosquitoman.ca')); ?></a></li>
                    <li><img src="<?php echo get_template_directory_uri().'/assets/time.svg'; ?>"> <?php echo esc_html(get_theme_mod('footer_address', 'Headquarters 2401-224 King St W, Toronto, ON M5J 0A6, Canada')); ?></li>
                </ul>
            </div>

            <!-- Social Media & CTA -->
            <div class="col-md-3 text-center text-md-end">
                <a href="<?php echo esc_url(get_theme_mod('footer_facebook', '#')); ?>" class="text-dark fs-4"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo esc_url(get_theme_mod('footer_instagram', '#')); ?>" class="text-dark fs-4"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo esc_url(get_theme_mod('footer_cta_link', '#')); ?>" class="btn btn-light fw-bold rounded-pill px-4 py-2"><?php echo esc_html(get_theme_mod('footer_cta_text', 'Have a question?')); ?></a>
            </div>
        </div>
        <div class="text-center mt-4">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer-logo {
    max-width: 150px; /* Adjust size */
}

.footer ul {
    padding-left: 0;
}

.footer ul li {
    margin-bottom: 10px;
}

.footer i {
    color: #000;
    margin-right: 8px;
}

@media (max-width: 768px) {
    .footer .text-md-start {
        text-align: center !important;
    }

    .footer .text-md-end {
        text-align: center !important;
    }

    .footer .d-flex {
        justify-content: center !important;
    }
}

    </style>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>