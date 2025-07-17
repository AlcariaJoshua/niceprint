<?php get_header();

/**
 * Template Name: About
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/about.css">

<section class="banner global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Blending Artistry And Memories in Perfect Harmony</h1>
                <p>There is more to us than meets the eye! We are not just photographers and videographers, we are your
                    memory cheerleaders. From weddings to corporate events, our mission is to capture the essence of
                    every moment. Our team will transform your special seconds into timeless and sophisticated
                    souvenirs.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="more-about-us global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="first-sec">
                    <div class="text">
                        <span>More About Us</span>
                        <h2>Meet Your Trusted Visual Storytellers</h2>
                        <p>Curious about the artistry behind the shutter? Step into the backstage of creating your most
                            beloved photos and videos. Explore how we make and collect the magic. From sentimental
                            smiles to tear-jerking speeches, our team will capture your unique story of love and
                            laughter.
                        </p>
                        <p>
                            We approach each celebration with enthusiasm. With dedication in our stride, Nice Print
                            Photo believes that we are your bridges in remembering your most precious moments. Ready to
                            capture your special story, our team of creatives are committed to giving you masterpieces
                            you can enjoy forever.
                        </p>
                    </div>
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/aboutpic1.jpg"
                            alt="About Picture 1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/aboutpic2.jpg"
                            alt="About Picture 2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/aboutpic3.jpg"
                            alt="About Picture 3">

                    </div>
                </div>
                <div class="second-sec">
                    <div class="row">
                        <?php

                        // Check rows exists.
                        if (have_rows('more_about_us_card')):

                            // Loop through rows.
                            while (have_rows('more_about_us_card')):
                                the_row();
                                ?>

                                <div class="col-xl-4">
                                    <div class="card">
                                        <img src="<?php echo get_sub_field('logo') ?>" alt="logo">
                                        <h3><?php echo get_sub_field('card_title') ?></h3>
                                        <p><?php echo get_sub_field('card_paragraph') ?></p>
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
</section>

<section class="truelife-images global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="first-sec">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/trueimage1.jpg"
                            alt="About Picture 4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/trueimage2.jpg"
                            alt="About Picture 5">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about/trueimage3.jpg"
                            alt="About Picture 6">

                    </div>

                    <div class="text">
                        <!-- <span>Lorem Ipsum Dolor</span> -->
                        <h2>Experience the Exceptional with Us </h2>
                        <p>We believe that photos and videos are not just the art forms of today. They are more than
                            just reflections of craft. They are priceless visuals. Each format captures a second or a
                            minute of fleeting memories. While you can always capture the mundane and ordinary moments
                            of your life, it is always worthwhile to invest in the events that matter.
                        </p>
                        <p>
                            Working with Nice Print Photo means partnering with the experts. When you need stunning
                            images and records of your special moments, we will be there. Every laugh, embrace, and kiss
                            is captured artistically by our team. Dedicated to give you the best treasures, our services
                            are here to be your bridges to your life-changing milestones.
                        </p>
                        <p>
                            Let our team be your partners for creativity and memory-collecting. Our mission to become
                            your extra pairs of eyes in your significant events is unparalleled. We will capture every
                            angle, cranny, and nook in a seamless experience. Embark on high-quality photography and
                            videography services with Nice Print Photo.
                        </p>
                    </div>

                </div>
                <div class="second-sec">
                    <div class="row">
                        <?php

                        // Check rows exists.
                        if (have_rows('true_life_images_card')):

                            // Loop through rows.
                            while (have_rows('true_life_images_card')):
                                the_row();
                                ?>

                                <div class="col-xl-4">
                                    <div class="card">
                                        <img src="<?php echo get_sub_field('logo') ?>" alt="logo">
                                        <h3><?php echo get_sub_field('card_header') ?></h3>
                                        <p><?php echo get_sub_field('card_paragraph') ?></p>
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
</section>

<?php get_template_part('templated-section/productsWorks', 'section'); ?>

<?php include 'templated-section/contact-section.php'; ?>

<?php include 'templated-section/message-us.php'; ?>



<?php get_footer(); ?>