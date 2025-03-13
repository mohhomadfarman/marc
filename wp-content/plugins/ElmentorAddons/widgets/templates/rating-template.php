<?php
$settings = $this->get_settings_for_display();
$design = $settings['design_version'];
$reviews = $settings['reviews'];
$slides_per_view = !empty($settings['slidesPerView']) ? intval($settings['slidesPerView']) : 1;
$space_between = !empty($settings['spaceBetween']) ? intval($settings['spaceBetween']) : 24;
$total_reviews = $settings['total_reviews'];
$rating = $settings['rating2'];
$max_stars = 5;
?>

<style>
    .swiper-container 
    {
        display: flex !important;
        flex-direction:column;
        height:500px;
     
    }
    @media (max-width:1200px) {
        .swiper-container {
            height:700px;
        }
    }
    @media (max-width:1024px) {
        .swiper-container {
            height:450px;
        }
    }
    @media (max-width:350px) {
        .swiper-container {
            height:550px;
        }
    }
   
   
    .review-box {
        background: #79946E;
        display: flex;
        flex-direction: column;
        gap: 24px;
        padding: 32px;
        height:100%;
    }
    .review-box h4 {
        font-weight: 600;
        font-size: 28px;
        line-height: 150%;
        letter-spacing: 2%;
        color: #FFFFFF;
    }
    .review-box p {
        font-weight: 400;
        font-size: 16px;
        line-height: 150%;
        letter-spacing: 2%;
        color: #FFFFFF;
        text-overflow: ellipsis;
    }
    .swiper-slide:not(:last-child) .review-box {
    border-right: 2px solid #000; /* Adjust color and width as needed */
    
}
</style>


<div class="swiper-container swiper marc-slider2 <?php echo esc_attr($design); ?>">

<div class="d-flex w-100 justify-content-between mb-5 mt-5" style="max-width:1330px; margin:auto ">
<div class="swiper-button-prev1">


<svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="-0.8" y="0.8" width="34.4" height="34.4" rx="17.2" transform="matrix(-1 0 0 1 34.4 0.430054)" fill="#F3F3F2"/>
<rect x="-0.8" y="0.8" width="34.4" height="34.4" rx="17.2" transform="matrix(-1 0 0 1 34.4 0.430054)" stroke="black" stroke-width="1.6"/>
<path d="M24 18.1725V19.6876H14.9091L19.0758 23.8543L18 24.9301L12 18.9301L18 12.9301L19.0758 14.0058L14.9091 18.1725H24Z" fill="black"/>
</svg>
</div>


<div class="rating d-flex align-items-center text-dark gap-2 flex-md-row flex-column">
                    <?php if($rating){?>
                    <div class=" rating-box d-flex align-items-center  ">
                       <div class="bg-white rounded-5 gap-1" style="backdrop-filter: blur(20px)box-shadow: 0px 4px 20px 0px #0000001A;">
                             <img width="24px" height="24px" src="<?php echo plugin_dir_url(__FILE__) . 'assets/image.png'; ?>"/>
                       </div>
                       <div class="stars">
                            <?php 
                            for ($i = 1; $i <= $max_stars; $i++) {
                                if ($i <= floor($rating)) {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/Star.svg" />';
                                } elseif ($i - 0.5 <= $rating) {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/halfStar.svg" />';
                                } else {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/emptyStar.svg" />';
                                }
                            }
                            ?>
                        </div>
                    </div>
                     <div class="rating mb-0 d-flex gap-2 align-items-center text-dark"><span class="text-dark"><?php echo $rating?></span> Based on <?php echo $total_reviews?> reviews</div>
                            <?php }?>
                </div>

<div class="swiper-button-next1">

    
<svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.8" y="1.23005" width="34.4" height="34.4" rx="17.2" fill="#EBE715"/>
<rect x="0.8" y="1.23005" width="34.4" height="34.4" rx="17.2" stroke="black" stroke-width="1.6"/>
<path d="M12 18.1725V19.6876H21.0909L16.9242 23.8543L18 24.9301L24 18.9301L18 12.9301L16.9242 14.0058L21.0909 18.1725H12Z" fill="black"/>
</svg>
</div>

</div>
    <div class="swiper-wrapper">
        <?php foreach ($reviews as $review) : ?>
            <div class="swiper-slide">
                <div class="review-box ">
                    <div class="d-flex flex-column gap-1">
                        <h4 class="mb-0"><?php echo esc_html($review['name']); ?></h4>
                        <div class="stars">
                            <?php 
                            for ($i = 1; $i <= $max_stars; $i++) {
                                if ($i <= floor($review['rating'])) {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/Star.svg" />';
                                } elseif ($i - 0.5 <= $review['rating']) {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/halfStar.svg" />';
                                } else {
                                    echo '<img width="14px" height="13px" src="'.plugin_dir_url(__FILE__).'assets/emptyStar.svg" />';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <p><?php echo esc_html($review['review']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
</div>

<script>
   
    document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Makes slides adapt based on container width
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
        breakpoints: {
            320: {
                slidesPerView: 1, // 1 slide on small screens
            },
            768: {
                slidesPerView: 2, // 2 slides on tablets
            },
            1024: {
                slidesPerView: <?php echo $slides_per_view; ?>, // 3 slides on larger screens
            }
        }
    });
});

</script>
