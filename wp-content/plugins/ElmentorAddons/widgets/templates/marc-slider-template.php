<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
$settings = $this->get_settings_for_display();
$autoplay_speed = !empty($settings['autoplay_speed']) ? intval($settings['autoplay_speed']) : 3000;
$loop = ($settings['loop'] === 'yes') ? 'true' : 'false';
$slides_per_view = !empty($settings['slides_per_view']) ? intval($settings['slides_per_view']) : 1;
$navigation = ($settings['navigation'] === 'yes') ? 'true' : 'false';
$pagination = ($settings['pagination'] === 'yes') ? 'true' : 'false';
?>

<style>
    .marc-slider-container .heading
    {
font-weight: 400;
font-size: 16px;
line-height: 150%;
letter-spacing: 16%;
text-align: center;
text-transform: uppercase;
color: #EBE715;

    }.marc-slider-container .mein-heading
    {
font-weight: 700;
font-size: 42px;
line-height: 150%;
letter-spacing: 2%;
text-align: center;
color: #000000;

    }
    .marc-slider-container p{
font-weight: 500;
font-size: 20px;
line-height: 150%;
letter-spacing: 2%;
color: #333333;
text-align:left;

    }
    </style>

<div class="marc-slider-container">
    <div class="swiper marc-slider">
        <div class="swiper-wrapper">
            <?php foreach ($settings['slides'] as $slide) : ?>
                <div class="swiper-slide">
                    <div class="home-service-widget " style="text-align:center; color:#666; padding:40px; max-width:908px; margin:auto">
                        <h4 class="heading">
                            <?php echo esc_html($slide['subHeading']); ?>
                        </h4>
                        <h4 class="mein-heading mb-5">
                            <?php echo esc_html($slide['heading']); ?>
                        </h4>
                        <p >
                            <?php echo esc_html($slide['description']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <style>
            .swiper-button-next,.swiper-button-prev{
                top:95% !important;
            }
            .swiper-button-next:after,.swiper-button-prev:after{
                content:unset !important;
            }
            .swiper-button-prev svg,.swiper-button-next svg{
                fill:#f3f3f2
            }
            .swiper-button-prev svg:hover,.swiper-button-next svg:hover{
                fill:#EBE715
            }
        </style>
        <?php if ($navigation === 'true') : ?>
            <div class="swiper-button-prev"><?php echo $settings['slides'][0]['icon_prev']; ?></div>
            <div class="swiper-button-next"><?php echo $settings['slides'][0]['icon_next']; ?></div>
        <?php endif; ?>

        <?php if ($pagination === 'true') : ?>
            <div class="swiper-pagination"></div>
        <?php endif; ?>
    </div>
</div>

<!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.marc-slider', {
            slidesPerView: <?php echo $slides_per_view; ?>,
            loop: <?php echo $loop; ?>,
            autoplay: {
                delay: <?php echo $autoplay_speed; ?>,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: <?php echo $navigation; ?> ? '.swiper-button-next' : '',
                prevEl: <?php echo $navigation; ?> ? '.swiper-button-prev' : '',
            },
            pagination: {
                el: <?php echo $pagination; ?> ? '.swiper-pagination' : '',
                clickable: true,
            },
        });
    });
</script>
