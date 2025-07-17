<?php get_header();

/**
 * Template Name: International Photographer
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/international-photographer.css">

<section class="banner banner-internation-photgrapher global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h1>International Memories Captured in Photo by Nice Print</h1>
                <p>
                    Professional photo add character to your international trips. Imagine capturing the raw emotion,
                    diverse cultures, and breathtaking landscapes with artistry. Each image becomes a cherished memory,
                    a vivid story whispered
                    through the lens.
                </p>
                <p>
                    Nice Print Photo’s International photographers unlock this magic. Their cultural fluency and insider
                    knowledge weave a unique narrative, ensuring your photo transcend borders and become timeless
                    mementos.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="what-inter-photo global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international-photographer/int-photo-1.jpg"
                        alt="international Photo 1">
                </div>
                <div class="text">
                    <h2>What is an International Photographer? </h2>
                    <p>International photographers are storytellers capturing cultures, landscapes, and events. Their
                        lens
                        surpasses borders, weaving universal narratives through stunning visuals.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="why-choose global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="title">
                    <h2>Why Choose Nice Print Photo’s International Photographer</h2>
                </div>
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international-photographer/int-photo-2.jpg"
                        alt="international Photo 2">
                </div>
                <div class="text">
                    <p>Unforgettable adventures deserve unforgettable souvenirs. Nice Print Photo capture the magic of
                        overseas travel.</p>
                    <p>Our world-class international photographers blend seamlessly into any location, capturing your
                        precious moments
                        with a keen eye for cultural detail.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="global-event global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="first-sec">
                    <div class="text">
                        <h2>Global Event Photography Experiences</h2>
                        <p>
                            There are many international occasions where a photographer is needed. Here are a few key
                            events that you may want to treasure:
                        </p>
                    </div>
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international-photographer/int-photo-4.jpg"
                            alt="International Pohto 4">
                    </div>
                </div>
                <div class="second-sec">
                    <div class="row">
                        <div class="card-container">
                            <div class="row">
                                <?php
                                // Check rows exist.
                                if (have_rows('global_event_photography_experiences')):
                                    // Initialize counter
                                    $counter = 0;
                                    // Count total rows
                                    $total_rows = count(get_field('global_event_photography_experiences'));

                                    // Loop through rows.
                                    while (have_rows('global_event_photography_experiences')):
                                        the_row();
                                        $counter++;
                                        // Determine column class for the last column
                                        $col_class = ($counter == $total_rows) ? 'col-xl-12' : 'col-xl-4';
                                        ?>
                                        <div class="<?php echo $col_class; ?>">
                                            <div class="global-event-card">
                                                <div class="logo">
                                                    <img src="<?php echo get_sub_field('sub_logo'); ?>"
                                                        alt="<?php esc_attr_e('Default Image', 'your-text-domain'); ?>">
                                                </div>
                                                <h3><?php echo get_sub_field('sub_title'); ?></h3>
                                                <p><?php echo get_sub_field('paragraph'); ?></p>
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

<section class="countries-captured global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="first-sec">
                    <div class="text">
                        <h2>Countries Captured by Nice Print Photo International Photographers</h2>
                        <p>
                            Our clients have trusted us to seize their special moments worldwide. May it be an intimate
                            proposal to creative photohoots, we have gone far and wide to give them the best results.
                            Here are a few places our team has been to to get that perfect shot:
                        </p>
                    </div>
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international-photographer/int-photo-3.jpg"
                            alt="International Pohto 3">
                    </div>
                </div>
                <div class="second-sec">
                    <div class="row">
                        <div class="card-container">
                            <div class="row">
                                <?php
                                // Check rows exist.
                                if (have_rows('countries_captured')):
                                    // Initialize counter
                                    $counter = 0;
                                    // Count total rows
                                    $total_rows = count(get_field('countries_captured'));

                                    // Loop through rows.
                                    while (have_rows('countries_captured')):
                                        the_row();
                                        $counter++;
                                        // Determine column class for the last column
                                        $col_class = ($counter == $total_rows) ? 'col-xl-12' : 'col-xl-4';
                                        ?>
                                        <div class="<?php echo $col_class; ?>">
                                            <div class="global-event-card">
                                                <div class="logo">
                                                    <img src="<?php echo get_sub_field('sub_logo'); ?>"
                                                        alt="<?php esc_attr_e('Default Image', 'your-text-domain'); ?>">
                                                </div>
                                                <h3><?php echo get_sub_field('sub_title'); ?></h3>
                                                <p><?php echo get_sub_field('paragraph'); ?></p>
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


<section class="contact-international-team global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h3>Contact Our International Team of Photographers
                    at Nice Print Photo</h3>
                <p>Our world-class photographers skillfully blend into any location like invisible ninjas. They don't
                    just capture
                    photo; they create living stories that transport you back to your adventures. Contact us today to
                    experience
                    the world through our lens.</p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url(); ?>/contact/" class="cta" target="_blank">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>