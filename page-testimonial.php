<?php get_header();


/**
 * Template Name: Testimonnial
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/testimonial.css">

<section class="banner global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Hear the Echoes of Excellence in Our Customers' Stories,
                    Where Quality Meets Satisfaction</h1>
                <p>
                    Ever wondered what it's like to see your once-in-a-lifetime come alive through stunning visuals?
                    Dive into the captivating stories of Nice Print Photo's happy clients! Discover how our expertise
                    has transformed events, leaving them breathless with the results. Prepare to be inspired.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="testimonial-page global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <span>Testimonials</span>
                    <h2>Hear What Our Clients Have to Say</h2>
                    <p>
                        From transformative experiences to unparalleled service, our clients' stories showcase why they
                        choose us. Explore their journeys below and see how we can elevate your expectations.
                    </p>
                </div>
                <div class="testimonial-con">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $testimonialPost = array(
                        'paged' => $paged,
                        'post_type' => 'testimonial',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );
                    $testtimonial = new WP_Query($testimonialPost);
                    if ($testtimonial->have_posts()):
                        while ($testtimonial->have_posts()):
                            $testtimonial->the_post();
                            $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                            ?>

                            <div class="card">
                                <div class="avatar-con">
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
                                    <div class="name-con">
                                        <h6><?php the_title(); ?></h6>
                                        <div class="star-con">
                                            <?php
                                            // Assuming you've created a field with the name 'star_rating' for your post/page
                                            $star_rating = get_field('star_rating');
                                            // Assuming you've created a field with the name 'reviews_count' for your post/page
                                            $reviews_count = get_field('review_counts');
                                            $star_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/05/wholestar.png';
                                            // $star_half = 'https://best.org.ph/wp-content/uploads/2024/01/halfstar.png';
                                            $star_empty = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/05/hallowstar.png';
                                            // Display stars
                                            if ($star_rating !== null && $star_rating > 0) {
                                                $full_stars = floor($star_rating);
                                                $half_star = ($star_rating - $full_stars) >= 0.5;
                                                $empty_stars = 5 - $full_stars - ($half_star ? 1 : 0);
                                                // Full stars
                                                for ($i = 0; $i < $full_stars; $i++) {
                                                    echo '<img src="' . esc_url($star_image_url) . '" alt="Full Star">';
                                                }
                                                // Half star
                                                if ($half_star) {
                                                    echo '<img src="' . esc_url($star_half) . '" alt="Half Star">';
                                                }
                                                // Empty stars
                                                for ($i = 0; $i < $empty_stars; $i++) {
                                                    echo '<img src="' . esc_url($star_empty) . '" alt="Empty Star">';
                                                }
                                            } else {
                                                // Display grey stars if there's no star rating
                                                for ($i = 0; $i < 5; $i++) {
                                                    echo '<img src="' . esc_url($star_empty) . '" alt="Empty Star">';
                                                }
                                            }
                                            ?>
                                            <!-- <div class="count">
                                                    <p>(<?php echo $reviews_count ?? 0; ?>)
                                                    </p>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo get_the_content(); ?></p>
                            </div>

                        <?php endwhile; else: ?>
                        <h2>Sorry, no post have found.</h2>
                    <?php endif; ?>
                </div>
                <div class="btn-btn">
                    <button href="#" class="a-color" id="load-more">Load More</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-us-now global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2>
                    Beyond snapshots. We craft experiences in motion and light. Let's create a visual masterpiece of
                    your event.
                </h2>
                <p>
                    Ditch the planning stress, ignite the magic! Nice Print Photo goes beyond flawless execution - we
                    turn your event vision into reality. From concept to celebration, we collaborate on every detail to
                    craft an unforgettable experience. Contact us and let's get started!
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url() ?>/contact/" class="cta" target="_blank">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templated-section/message-us.php'; ?>

<?php get_footer(); ?>