<?php get_header();

/**
 * Template Name: Kiddie
 */


?>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">


<section class="banner bannner-kiddie global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>From Giggles to Milestones,
                    Preserve the Little Wonders
                    Of Toddlers and Children</h1>
                <p>Childhood is an adventure and every moment of joy deserves to be remembered. These snippets of their
                    present will become some of the most cherished seconds. Each photo or video will reflect the
                    beginnings of their personality. Whether it is for birthdays or a simple addition to the family
                    gallery, look into our kiddie services for your precious one.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="collection global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="title-search">
                    <h2>Kiddie Collections </h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'kiddie',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );
                    $blogs = new WP_Query($blogPosts);
                    if ($blogs->have_posts()):
                        while ($blogs->have_posts()):
                            $blogs->the_post();
                            $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                            ?>
                            <div class="card">
                                <a href="<?php echo get_the_permalink(); ?>" target="_blank">
                                    <div class="image">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="image">
                                                <?php
                                                // Get the URL of the featured image
                                                $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                                ?>
                                                <img src="<?php echo esc_url($featuredIMG[0]); ?>"
                                                    alt="<?php the_title_attribute(); ?>">
                                            </div>
                                        <?php else: ?>
                                            <div class="image">
                                                <img src="https://blackdragon.tech/niceprint/wp-content/uploads/2024/06/Thumbnail-1.png"
                                                    alt="<?php esc_attr_e('Default Image', 'your-text-domain'); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="text">
                                            <span> <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                foreach ($categories as $category) {
                                                    echo esc_html($category->name) . ' ';
                                                }
                                            }
                                            ?></span>
                                            <p><?php echo wp_trim_words(apply_filters('the_content', get_the_content()), 21, '. . .'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>

                        <?php endwhile; else: ?>
                        <h2>Sorry, no post found.</h2>
                    <?php endif; ?>


                </div>
                <div class="btn-btn">
                    <button href="#" class="a-color" id="load-more">Load More</button>
                </div> -->
            
                            
                <div class="gallery">
                    <?php echo do_shortcode('[Best_Wordpress_Gallery id="19" gal_title="Kiddie Collection"]') ?>
                </div>
            
            </div>
        </div>
    </div>
</section>


<section class="preview global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <!-- <span>Lorem Ipsum Dolor</span> -->
                    <h2>Big Memories with Little Ones:
                        Collect Childhood Keepsakes,
                        And Cherish the Early Years</h2>
                    <p>
                        From newborn remembrances to terrible toddler chapters, every little moment are worth way more
                        than we think. Before you know it, preschools turn to high schools, noisy breakfasts turn to
                        quiet mornings, and playdates turn into computer games. Remember it all by creating a beautiful
                        visual story of their childhood.
                    </p>
                    <p>
                        At Nice Print Photo, the magic of childhood is perfectly captured through our lens. Every angle
                        of this present moment is forever preserved in photos and videos. From gapped teeth smiles to
                        small hand grips, wet kisses to high-pitched squeals, our team can celebrate these little
                        moments of your beloved one.
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/kiddie/kiddielong.jpg"
                        alt="Image 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/kiddie/kiddieshort1.jpg"
                        alt="Image 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/kiddie/kiddieshort2.jpg"
                        alt="Image 3">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="package-info global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2>Collect the Seconds from the Fleeting Years of Youth
                    With the Perfect Kiddie Package
                </h2>
                <p>
                    These years will pass in a blink of an eye. Slow it down with photo and videos from our talented
                    Nice Print Photo experts. Choose your ideal set for your young one.
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url() ?>/packages/" class="cta" target="_blank">View Packages</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'templated-section/contact-section.php'; ?>

<?php include 'templated-section/message-us.php'; ?>


<?php get_footer(); ?>