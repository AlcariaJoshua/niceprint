<?php get_header();

/**
 * Template Name: Wedding
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="banner global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Your Dream Wedding
                    Preserved and Treasured Perfectly
                    With Timeless Elegance</h1>
                <p>
                    Let us capture the essence of your love story with unmatched sophistication and style. From
                    heartfelt vow exchanges to teary laughter, your romantic and sentimental moments are caught with our
                    lens. At Nice Print Photo, we turn your fleeting moments into classic images.
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
                    <h2>Wedding Collections</h2>
                    <!-- <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div> -->
                </div>

                <!-- being commented bcuz no collat dont delete -->
                <!-- <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'wedding',
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
                <?php echo do_shortcode('[Best_Wordpress_Gallery id="20" gal_title="Wedding Collection"]') ?>
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
                    <h2>A Seamless Capturing Experience
                        Of Your Most Beloved Wedding
                        With Nice Print Photo</h2>
                    <p>
                        A wedding is the beginning of every wonderful story of a couple. More than just a day, It is
                        when a lifetime together starts. Every emotion is on the edge for every guest on your list. From
                        bridesmaids to grandparents, brothers to aunts, it is overwhelming with emotions that make the
                        day remarkable and memorable.
                    </p>
                    <p>
                        With our team, we will go beyond simply capturing these sentimental details. We want to deliver
                        not only high-quality images but also exceptional experience. So, while you are in the moment,
                        don’t worry about forgetting it. We too are in the moment with you, capturing every second of
                        your special day.
                    </p>
                </div>
                <div class="image-contianer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/wedding/longimg.jpg"
                        alt="Image 1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/wedding/short1.jpg"
                        alt="Imagee 2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/wedding/short2.jpg"
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
                <h2>The Journey to Preserving
                    Your Wedding Memories Start Here
                </h2>
                <p>
                    Nice Print Photo’s wedding packages offer a variety of options to say ‘I do’ with. Each set is
                    curated to beautifully frame your love story forever. Explore the different packages to find your
                    ideal way of revisiting every stunning detail.
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