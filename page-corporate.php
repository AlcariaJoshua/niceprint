<?php get_header();

/**
 * Template Name: Corporate
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">

<section class="banner banner-corporate global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <h1>Make Lasting Impression and Snap Your Milestones With Professionals</h1>
                    <p>
                        Photo and videos not only for sentimentality. They are also to capture a sense of pride at
                        work. Whether it is for a casual or formal event, these moments are important in reflecting the
                        friendship, fun, and laughter in the office.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="collection global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="title-search">
                    <h2>Corporate Collections </h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'corporate',
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
                        <?php echo do_shortcode('[Best_Wordpress_Gallery id="24" gal_title="Corporate Collection"]') ?>
                    </div>            

            </div>
        </div>
    </div>
</section>


<section class="preview international-preview global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <!-- <span>Lorem Ipsum Dolor</span> -->
                    <h2>From Simple to Formal Occasions,
                        Capture Unforgettable Career Moments
                        in Thoughtful High Definition</h2>
                    <p>
                        Work is much more than just what we do. It is so much more than the tasks and projects we
                        create. Our 9-5 is also about the incredible moments people create. It is the smiles during
                        bonding activities, the jokes during dinners, and the claps during ceremonies. They are these
                        small moments that memories are forged.
                    </p>
                    <p>
                        At Nice Print Photo, we are all about capturing this personal moments. While aligning our lens
                        and talents to your unique brand, our team will create a gallery of your special milestones with
                        the team. From corporate seminars to casual lunches, we will spotlight the key moments you need
                        to create a stunning company album.
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/corporate/corporateshort1.jpg"
                        alt="Preview 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/corporate/corporateshort2.jpg"
                        alt=" Preview 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/corporate/corporatelong.jpg"
                        alt="Preview 3">

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
                    Showcase Signitifant Career Milestones
                    Upgrade Your Documentation with These Packages
                </h2>
                <p>
                    Our team will work closely to build the story you want to tell. From angles and lighting to coverage
                    mediums, Nice Print Photo will capture your company’s special moments with any of our curated sets.
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