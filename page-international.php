<?php get_header();

/**
 * Template Name: International
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">


<div class="info-content <?php echo $classes; ?>"></div>

<section class="banner banner-international global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Capturing Your Sentimentality
                    In Graceful Visionary Detail
                    Wherever You May Be</h1>
                <p>
                    New places mean new memories. Whether you are exploring the streets of Hong Kong or saying yes to
                    forever in an Italian cathedral, preserving the ambiance of it all is essential. At Nice Print
                    Photo, our international services are your partners in preserving these special moments in foreign
                    places.
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
                    <h2>International Collections</h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'international',
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
                <?php echo do_shortcode('[Best_Wordpress_Gallery id="13" gal_title="International Collection"]') ?>
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
                    <h2>Craftfully Preserving Memories
                        Beyond International Borders
                        With Nice Print Photo</h2>
                    <p>
                        The world is full of exciting places to take in and absorb. Each city can bring out a wave of
                        different emotions and memories. While it may be far from home, you do not need to worry about
                        how you can capture the thrill of the experience. Distance will not match one’s yearning to make
                        unique visual souvenirs.
                    </p>
                    <p>
                        Regardless of where it is, our creative team will follow the trail of your excitement. Treat us
                        as your second pair of eyes in this adventure. From destination weddings to breathtaking
                        birthday parties, we are dedicated to give you your special keepsakes from this moment.
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
                <h2>Making Global Adventures to Picture Perfect Souviners
                    Discover Our Memory-Capturing Packages</h2>
                <p>Telling your thrilling memories begins with the right angles and plans. Explore our different curated
                    packages then find and tailor your perfect one. With our sets, you are assured every angle is
                    preserved without hassle.</p>
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