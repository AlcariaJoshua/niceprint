<?php get_header();

/**
 * Template Name: Concept Room
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">

<section class="banner banner-concept-room global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Blank Canvas Endless Possibilities: Our Concept Room</h1>
                <p>
                    Designed as a playground for your wildest creations, a concept room is an artist’s paradise. It is a
                    flexible space that can satisfy your imagination. From whimsical settings to avant-garde backdrops,
                    the space can embrace it all. Capture without limits in a concept room.
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
                    <h2>The Concept Room</h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'concept',
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
                    <?php echo do_shortcode('[Best_Wordpress_Gallery id="22" gal_title="Concept Room Collection"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="preview bday-preview global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <!-- <span>Lorem Ipsum Dolor</span> -->
                    <h2>Curation Like Never Before: Unleash Your Imagination With Nice Print Photo</h2>
                    <p>
                        Ditch the limitations of your setting and reach the potential of your lens with a concept room.
                        The space is designed to easily mimic any environment of your vision. It is a highly versatile
                        location that can be simply or extravagantly designed. Every detail is truly ours, every corner
                        an addition to your masterpiece.
                    </p>
                    <p>
                        At Nice Print Photo, we don’t want to confine your artistry. Creativity is further pushed when
                        anything is possible. Our concept studio offers you exceptional flexibility for your every need.
                        Whether you are designing an epic fantastical setting or a high-fashion editorial environment,
                        our space is your ideal place.
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/concept-room/conceptlong.jpg"
                        alt="preview 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/concept-room/conceptshort1.jpg"
                        alt="preview 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/concept-room/conceptshort2.jpg"
                        alt="preview 3">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="package-info global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2>
                    To Capture Your Kind of Masterpiece,
                    Find Your Ideal Package Today
                </h2>
                <p>
                    Ready to bring your idea to life? Don’t slow its realization and explore the many options Nice Print
                    Photo can offer. Each package is curated to give you the best deal for your photos and videos.
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url(); ?>/packages/" class="cta" target="_blank">View Packages</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'templated-section/contact-section.php'; ?>

<?php include 'templated-section/message-us.php'; ?>


<?php get_footer(); ?>