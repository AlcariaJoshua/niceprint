<?php get_header();

/**
 * Template name: Birthday Collection
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">

<section class="banner banner-birthday global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <h1>Blow Out the Candles,
                        Light Up the Memories,
                        And Celebrate Turning Older</h1>
                    <p>Birthdays are annual opportunities to commemorate another year of life. They are a reminder that
                        we are growing and maturing gracefully. As a sentimental day, there are many details that you
                        just want to cherish as the years go by. Continue being in awe of this special day year after
                        year with us.
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
                    <h2>Birthday Collections </h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->

                </div>
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'birthday',
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
                    <?php echo do_shortcode('[Best_Wordpress_Gallery id="17" gal_title="Birthday Collection"]') ?>
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
                    <h2>Freeze the Laughter,
                        And Share the Joy:
                        Make Your Birthday Unforgettable</h2>
                    <p>
                        Even though it is an annual event, birthdays deserve more than just a rushed group photo. It
                        isn’t all about the cake and candles too. Capturing the essence of growing up, and entering a
                        new chapter in your life, merits attention to the abundant emotions of the occasion. Don’t just
                        capture the glamor of it all.
                    </p>
                    <p>
                        At Nice Print Photo, you can preserve even the simplest details of it. From a wrinkle in the
                        eye or smile to the big cheeks when blowing a candle. Bask in the joy of celebrating your new
                        age without any guilt. Our team of creatives ensures that you will have all the keepsakes you
                        need!
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/birthday/bdaylongimg.jpg"
                        alt="Image 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/birthday/bdayshortimg1.jpg"
                        alt="Image 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/birthday/bdayshortimg2.jpg"
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
                <h2>Remember Your Day Like It Was Before
                    Begin Capturing with The Right Angle
                </h2>
                <p>
                    Tailor the right narrative on your birthday with our packages. From talented photographers to
                    different sets of services, we will deliver stunning and high-quality advances for your
                    picture-perfect memories.
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url() ?>/packages/" class="cta" target="_blank">View Packages</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'templated-section/contact-us.php'; ?>

<?php include 'templated-section/message-us.php'; ?>

<?php get_footer(); ?>