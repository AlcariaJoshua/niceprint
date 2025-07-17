<?php echo get_header();

/**
 * Template Name: Packages Template
 */

?>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/packages-template.css">


<?php
$post_id = get_queried_object_id();
$banner_image_url = ''; // set default image URL

// Logic to set $banner_image_url based on $post_id
if (is_single() || is_page()) {
    if ($post_id == 481) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/wedding-packages-banner.jpg';
    } elseif ($post_id == 483) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/debut-banner.jpg';
    } elseif ($post_id == 491) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/kiddie-banner-package.jpg';
    } elseif ($post_id == 539) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/package-adult-banner.jpg';
    } elseif ($post_id == 550) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/silver-gold-banner.jpg';
    } elseif ($post_id == 560) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/tinghun-banner.jpg';
    } elseif ($post_id == 567) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/npmagic-banner.jpg';
    } elseif ($post_id == 572) {
        $banner_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/livestream-banner.jpg';
    } else {
        $banner_image_url = 'url(default-image.jpg) center/cover no-repeat';
    }
}
?>


<?php if (is_page(483) ): ?>

    <style>
        div#pills-standard .package-con-card .card .text p {
            height: 100%;
            min-height: 96px;
        }

        @media(max-width: 991px) {

            div#pills-standard .package-con-card .card .text p {
                min-height: unset;
            }
        }
    </style>

<?php endif; ?>


<?php if (is_page(481) || is_page(491) || is_page(560)) : ?>

    <style>
        .package-con-card .card .text p {
            height: 100%;
            min-height: 72px;
        }

        div#pills-premium .package-con-card .card .text h3 {
            height: 100%;
            min-height: 57px;
        }


        @media(max-width: 991px) {

            .package-con-card .card .text p {
                min-height: unset;
            }


            div#pills-premium .package-con-card .card .text h3 {
                min-height: unset;
            }
        }
    </style>

<?php endif; ?>



<section class="banner global-padding "
    style="background: url('<?php echo $banner_image_url; ?>') center/cover no-repeat ;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span><?php echo get_field('banner_span') ?></span> -->
                <h1><?php echo get_field('banner_header') ?></h1>
                <p>
                    <?php echo get_field('banner_text') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3 cards shown but no nav tabs -->
<?php if (is_page(560) || is_page(572)): ?>

    <style>
        ul#pills-tab {
            display: none;
        }

        .show-more {
            display: none;
        }


        @media(max-width: 991px) {

            .package-con-card {
                grid-template-columns: repeat(1, 1fr);
            }

        }
    </style>
<?php endif; ?>

<!-- np magic -->
<?php if (is_page(567)): ?>
    <style>
        .np-magic-link p {
            margin-bottom: 6px;
        }

        .np-magic-link a {
            color: #B34457 !important;
            font-size: 16px;
            font-family: "Epilogue", sans-serif;
            font-style: italic;
            text-decoration-line: underline;
        }
    </style>
<?php endif; ?>

<section class="packages global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <span><?php echo get_field('package_span') ?></span>
                    <h2><?php echo get_field('package_header') ?></h2>
                    <p>
                        <?php echo get_field('package_text') ?>
                    </p>
                </div>
                <div class="navtab-container">
                    <ul class="nav nav-pills " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-standard-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-standard" type="button" role="tab" aria-controls="pills-standard"
                                aria-selected="true">Standard</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-premium-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-premium" type="button" role="tab" aria-controls="pills-premium"
                                aria-selected="false">Premium</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-standard" role="tabpanel"
                            aria-labelledby="pills-standard-tab" tabindex="0">

                            <div class="package-con-card">

                                <!-- packages with 1 image and 1 card and no nav tabs -->
                                <?php if (is_page(550) || is_page(567)): ?>

                                    <style>
                                        .package-con-card .card {
                                            width: 100%;
                                            max-width: 620px;
                                        }

                                        .single-picture .image {
                                            padding: 10px;
                                            height: 100%;
                                            background: #fff;
                                        }

                                        ul#pills-tab {
                                            display: none;
                                        }

                                        .package-con-card .card {
                                            background: #fff;
                                        }

                                        .package-con-card .card h3 {
                                            color: #212121;
                                        }

                                        .package-con-card .card p {
                                            color: #554F56;
                                        }

                                        .package-con-card .card .show-more {
                                            display: none;
                                        }

                                        .package-con-card .card .term-condition p {
                                            color: #B34457;
                                        }

                                        .package-con-card .btn-btn a {
                                            background: #B34457;
                                        }

                                        @media(max-width: 991px) {

                                            .package-con-card {
                                                flex-direction: column;
                                            }

                                            .package-con-card .single-picture .image img {
                                                max-height: 500px;
                                            }

                                            .package-con-card .card {
                                                max-width: unset;
                                            }

                                        }

                                        @media(max-width: 767px) {}
                                    </style>

                                    <div class="single-picture">


                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="image">
                                                <?php
                                                // Get the URL of the featured image
                                                $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                                ?>
                                                <img src="<?php echo esc_url($featuredIMG[0]); ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                <?php endif; ?>

                                <?php

                                // Check rows exists.
                                if (have_rows('standard_package')):

                                    // Loop through rows.
                                    while (have_rows('standard_package')):
                                        the_row();
                                        ?>

                                        <div class="card">
                                            <div class="logo">
                                                <img src="<?php echo get_sub_field('package_logo') ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            </div>
                                            <div class="text">
                                                <h3><?php echo get_sub_field('package_header') ?></h3>
                                                <p><?php echo get_sub_field('package_text') ?></p>
                                            </div>
                                            <div class="btn-btn">
                                                <a href="<?php echo get_home_url(); ?>/contact/" class="cta"
                                                    target="_blank">Inquire Now</a>
                                            </div>
                                            <div class="inclusion">
                                                <?php

                                                // Check rows exists.
                                                if (have_rows('inclusive_text')):

                                                    // Loop through rows.
                                                    while (have_rows('inclusive_text')):
                                                        the_row();
                                                        ?>

                                                        <div class="inclusion-text">
                                                            <div class="logo">
                                                                <img src="<?php echo get_sub_field('inclusive_logo') ?>"
                                                                    alt="<?php the_title_attribute(); ?>">
                                                            </div>
                                                            <p><?php echo get_sub_field('inclusive_p') ?></p>
                                                        </div>
                                                        <?php

                                                        // End loop.
                                                    endwhile;

                                                    // No value.
                                                else:
                                                    // Do something...
                                                endif;
                                                ?>

                                            </div>
                                            <?php if (is_page(567)): ?>
                                                <div class="np-magic-link">
                                                    <p>For sample, kindly click this link below:</p>
                                                    <a href="https://vt.tiktok.com/ZSFRxBHjF/"
                                                        target="_blank">https://vt.tiktok.com/ZSFRxBHjF/</a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="term-condition">
                                                <p>*Terms & Conditions Apply</p>
                                                <p>*Subject to out of Town Fees for Locations
                                                    outside Metro Manila</p>
                                            </div>
                                            <div class="btn-btn show-more" id="load-more3">
                                                <button href="#" class="a-color">Show More</button>
                                            </div>
                                        </div>

                                        <?php

                                        // End loop.
                                    endwhile;

                                    // No value.
                                else:
                                    // Do something...
                                endif;
                                ?>



                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-premium" role="tabpanel"
                            aria-labelledby="pills-premium-tab" tabindex="0">

                            <div class="package-con-card">

                                <?php

                                // Check rows exists.
                                if (have_rows('premuim_package')):

                                    // Loop through rows.
                                    while (have_rows('premuim_package')):
                                        the_row();
                                        ?>

                                        <div class="card">
                                            <div class="logo">
                                                <img src="<?php echo get_sub_field('premium_logo') ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            </div>
                                            <div class="text">
                                                <h3><?php echo get_sub_field('premium_header') ?></h3>
                                                <p><?php echo get_sub_field('premium_text') ?></p>
                                            </div>
                                            <div class="btn-btn">
                                                <a href="<?php echo get_home_url(); ?>/contact/" class="cta"
                                                    target="_blank">Inquire Now</a>
                                            </div>

                                            <div class="inclusion">
                                                <?php

                                                // Check rows exists.
                                                if (have_rows('premium_inclusion')):

                                                    // Loop through rows.
                                                    while (have_rows('premium_inclusion')):
                                                        the_row();
                                                        ?>

                                                        <div class="inclusion-text">
                                                            <div class="logo">
                                                                <img src="<?php echo get_sub_field('premuim_inclusion_logo') ?>"
                                                                    alt="<?php the_title_attribute(); ?>">
                                                            </div>

                                                            <p><?php echo get_sub_field('premuim_inclusion_p') ?></p>
                                                        </div>
                                                        <?php

                                                        // End loop.
                                                    endwhile;

                                                    // No value.
                                                else:
                                                    // Do something...
                                                endif;
                                                ?>

                                            </div>
                                            <div class="term-condition">
                                                <p>*Terms & Conditions Apply</p>
                                                <p>*Subject to out of Town Fees for Locations
                                                    outside Metro Manila</p>
                                            </div>
                                            <div class="btn-btn show-more" id="load-more3">
                                                <button href="#" class="a-color">Show More</button>
                                            </div>
                                        </div>

                                        <?php

                                        // End loop.
                                    endwhile;

                                    // No value.
                                else:
                                    // Do something...
                                endif;
                                ?>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us-now ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2><?php echo get_field('contact_us_title') ?></h2>
                <p>
                    <?php echo get_field('contact_us_paragraph') ?>
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url(); ?>/contact/" class="cta" target="_blank">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templated-section/message-us.php'; ?>


<?php echo get_footer(); ?>