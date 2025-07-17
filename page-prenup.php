<?php get_header();

/**
 * Template Name: Prenup
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">



<div class="banner banner-prenup global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Love Story Beginnings:
                    Capture the Spark
                    From ‘Yes’ to ‘Forever’</h1>
                <p>
                    Your cherished wedding memories do not start in the ceremony. It begins in the pre-wedding duties. A
                    pre-wedding shoot is all about preserving the humble exposition of your love story. Whether it is
                    love at first sight or a dedicated first meeting place, a pre-nuptial shoot can reflect an authentic
                    and one-the-of-a-kind experience for young and soon-to-be couples.
                </p>
            </div>
        </div>
    </div>
</div>



<section class="collection global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="title-search">
                    <h2>Prenup Collections</h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'prenup',
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
                <?php echo do_shortcode('[Best_Wordpress_Gallery id="15" gal_title="Prenup Collection"]') ?>
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
                    <h2>Feel Love in Every Frame
                        Show Undeniable Romance
                        Through Our Lens</h2>
                    <p>
                        The excitement of marriage begins and lingers from the very start. A prenup shoot captures these
                        humble beginnings. It is a sneak peek into your unique love story. Whether showcasing how you
                        first met or the kind of couple you want to be, this pre-wedding shoot can preserve these early
                        keepsakes.
                    </p>
                    <p>
                        With Nice Print Photo, experience an unparalleled shoot with our dedicated team. Our
                        photographers and videographers can help you perfectly set the stage for happily ever after.
                        Every detail is accounted for from setting, angle, and shot. All images add up to a stunning
                        collection for your wedding.
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international/intshort1.jpg"
                        alt="Image 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international/intshort2.jpg"
                        alt="Image 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/international/intlong1.jpg"
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
                <h2>Capture the Right Romantic Focus and
                    Find Your Perfect Package Match</h2>
                <p>
                    Every love story deserves a beautiful capture of its beginnings. Nice Print Photo wants couples to
                    enjoy this pre-wedding bliss. That is why we offer you the best sets for your prenup shoots with our
                    talented team!
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