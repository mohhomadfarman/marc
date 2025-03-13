<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$settings = $this->get_settings_for_display();
$image = $settings['image']['url'];
$rating = $settings['rating'];
$total_reviews = $settings['total_reviews'];
$title = $settings['title'];
$title2 = $settings['title2'];
$subtitle = $settings['subtitle'];
$description = $settings['description'];
$show_button_1 = $settings['show_button_1'];
$show_button_2 = $settings['show_button_2'];
$button_1_text = $settings['button_1_text'];
$button_2_text = $settings['button_2_text'];
$max_stars = 5;
?>
<div class="hero-section" >
    <?php //if ($image) : ?>
        <!-- <img src="<?php //echo esc_url($image); ?>" alt="Hero Image" /> -->
    <?php //endif; ?>
    <!-- <div class="hero-content">
        <h1><?php echo esc_html($title); ?></h1>
        <h2><?php echo esc_html($subtitle); ?></h2>
        <p><?php echo esc_html($description); ?></p>
        <p>Rating: <?php echo esc_html($rating); ?> (<?php echo esc_html($total_reviews); ?> reviews)</p>
        <div class="hero-buttons">
            <?php if ($show_button_1 === 'yes') : ?>
                <a href="#" class="btn btn-primary">Button 1</a>
            <?php endif; ?>
            <?php if ($show_button_2 === 'yes') : ?>
                <a href="#" class="btn btn-secondary">Button 2</a>
            <?php endif; ?>
        </div>
    </div> -->
    

        <div class="hero" >
       <div class="container">
        <div class="row">
            <div class="col-md-6" >
            <div class="wrapperHero d-flex flex-column gap-4">
                <div class="rating d-flex align-items-center gap-2">
                    <?php if($rating){?>
                    <div class=" rating-box d-flex align-items-center ">
                       <div class="bg-white rounded-5 gap-1">
                             <img width="24px" height="24px" src="<?php echo plugin_dir_url(__FILE__) . 'assets/image.png'; ?>"/>
                       </div>
                        <div class="stars" >
                                <?php 
                                for ($i = 1; $i <= $max_stars; $i++) {
                                    if ($i <= floor($rating)) {
                                        ?>
                                        <img width="14px" height="13px" src="<?php echo plugin_dir_url(__FILE__) . 'assets/Star.svg'; ?>"/>
                                        <?php 
                                    } elseif ($i - 0.5 <= $rating) {
                                        ?>
                                        <img width="14px" height="13px" src="<?php echo plugin_dir_url(__FILE__) . 'assets/halfStar.svg'; ?>"/>
                                        <?php 
                                    } else {
                                        ?>
                                        <img width="14px" height="13px" src="<?php echo plugin_dir_url(__FILE__) . 'assets/emptyStar.svg'; ?>"/>
                                        <?php 
                                    }
                                }
                                ?>
                        </div>
                    </div>
                     <div class="rating mb-0 d-flex gap-2 align-items-center"><span><?php echo $rating?></span> Based on <?php echo $total_reviews?> reviews</div>
                            <?php }?>
                </div>
        
                <div>
                    <h1 class="headline"><?php echo $title ?> <span class="fw-normal"><?php echo $title2?></span></h1>
                    <!-- <h2 class="subheading">with Google's highest Rated Mosquito Company</h2> -->
                    
                    <div class="services fw-bold"><?php echo $subtitle ?></div>
                </div>
                
                <p class="description"><?php echo $description?></p>
                
                <div class="cta-container d-flex gap-3 flex-md-row flex-wrap">
                    <?php
                    if($show_button_1){
                       ?>
                    <a href="#" class="cta-button call-button"><?php echo $button_1_text?></a>
                    <div class="or-text text-white fw-bold">OR</div>
                       <?php
                    }
                   ?>
                   <?php if($show_button_2){
                    ?>
                    <a href="#" class="cta-button quote-button"><?php echo $button_2_text?></a>
                    <?php
                     }
                    ?>
                    
                    
                </div>
            </div>
            </div>
        </div>
       </div>
    </div>
</div>


<style>
    .container{
        max-width:1366px;
    }
    .rating-box{
        width: 136;
height: 32;
gap: 4px;
padding: 4px;
border-radius: 80px;
border-width: 1px;
background: linear-gradient(101.83deg, rgba(255, 255, 255, 0.6) -3.73%, rgba(255, 255, 255, 0) 107.47%);
border: 1px solid;
border-image-source: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%),
linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.1) 100%);
backdrop-filter: blur(20px);
box-shadow: 0px 4px 20px 0px #0000001A;

    }
    .google-icon{
        color:#000
    }
    .rating{
        font-family: Roboto;
font-weight: 400;
font-size: 14px;
line-height: 150%;
letter-spacing: 2%;
color:#fff

    }
    .rating span{
        font-family: Roboto;
font-weight: 900;
font-size: 24px;
line-height: 150%;
letter-spacing: 2%;
color:#fff

    }
        .hero {
            height: 100%;
            min-height:100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 7%;
            padding-top:80px;
            padding-bottom:80px
        }
        .hero::before{
            content: "";
            width: 50%;
            height: 100%;
            position: absolute;
            z-index: 10;
            left:0;
            top:0;
            background: #000;
            opacity: 0.5;
        }
        .wrapperHero{
            position: relative;
            z-index: 11;
        }
        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .google-icon {
            background-color: white;
            border-radius: 50%;
            padding: 5px;
            margin-right: 10px;
        }
        .stars {
            color: #FFD700;
            margin-right: 10px;
        }
        .headline {
            font-size: 3.5rem;
            margin-bottom: 10px;
            line-height: 1.2;
        }
        .subheading {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .services {
font-weight: 600;
font-size: 24px;
line-height: 150%;
letter-spacing: 2%;
color: #EBE715;
        }
        .description {
font-weight: 600;
font-size: 20px;
line-height: 150%;
letter-spacing: 2%;
color: #FFFFFF;

        }
        .cta-container {
            display: flex;
            align-items: center;
        }
        .cta-button {
height: 56;
gap: 10px;
border-radius: 36px;
border-width: 1.6px;
padding-top: 16px;
padding-right: 32px;
padding-bottom: 16px;
padding-left: 32px;
font-weight: 600;
font-size: 16px;
line-height: 150%;
letter-spacing: 2%;

        }
        .call-button {
            background-color: transparent;
            border: 1.6px solid #EBE715;
            color: white;
        }
        .quote-button {
            background-color: #EBE715;
            border: 1.6px solid #000000;
            color: black;
        }
        .or-text {
font-weight: 600;
font-size: 16px;
line-height: 150%;
letter-spacing: 2%;
color:#FFFFFF;
        }
        @media (max-width:768px) {
            .hero::before{
                width: 100%;
            }
        }
    </style>