<?php get_header();

/**
 * Template Name: Blogs
 */


?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blogs.css">

<?php include 'templated-section/blogs-section.php'; ?>

<section class="main-blogs global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="title-search">
                    <h2>Other Blogs</h2>
                    <div class="search">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>

                </div>
                <div class="blogs-con">
                    <div class="row">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $blogPosts = array(
                            'paged' => $paged,
                            'post_type' => array(
                                'post'
                            ),
                            'post_status' => 'publish',
                            'posts_per_page' => 9,
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_tag',
                                    'field' => 'slug',
                                    'terms' => 'featured',
                                    'operator' => 'NOT IN'
                                )
                            )
                            
                        );
                        $blogs = new WP_Query($blogPosts);
                        if ($blogs->have_posts()):
                            while ($blogs->have_posts()):
                                $blogs->the_post();
                                $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                ?>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
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
                                        <div class="content">
                                            <div class="blog-title">
                                                <div class="sub-title">
                                                    <span>
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                            foreach ($categories as $category) {
                                                                echo esc_html($category->name) . ' ';
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                    <hr>
                                                    <p><?php echo reading_time(); ?></p>
                                                </div>
                                                <h5><?php the_title() ?></h5>
                                                <p><?php echo wp_trim_words(apply_filters('the_content', get_the_content()), 12, '. . .'); ?>
                                                </p>
                                            </div>
                                            <div class="btn-btn">
                                                <a href="<?php echo get_the_permalink(); ?>" target="_blank"
                                                    class="stretched-link">Read More
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none">
                                                        <path
                                                            d="M12.2777 7.00068C12.2777 7.09105 12.2637 7.17576 12.2357 7.25483C12.2076 7.3339 12.1595 7.40732 12.0913 7.47509L7.61834 11.9481C7.4828 12.0836 7.32195 12.1514 7.13581 12.1514C6.94966 12.1514 6.78859 12.0836 6.65259 11.9481C6.51705 11.8125 6.44928 11.6544 6.44928 11.4736C6.44928 11.2929 6.51705 11.1348 6.65259 10.9992L9.97343 7.67841L2.38295 7.67841C2.19093 7.67841 2.03279 7.61334 1.90854 7.48322C1.78429 7.3531 1.72217 7.19225 1.72217 7.00068C1.72217 6.80866 1.78723 6.64759 1.91735 6.51747C2.04747 6.38735 2.20832 6.32251 2.39989 6.32296L9.97343 6.32296L6.65259 3.00213C6.51705 2.86658 6.44928 2.70845 6.44928 2.52772C6.44928 2.347 6.51705 2.18886 6.65259 2.05332C6.78814 1.91777 6.94921 1.85 7.13581 1.85C7.32241 1.85 7.48325 1.91777 7.61834 2.05332L12.0913 6.52628C12.1591 6.59405 12.2072 6.66747 12.2357 6.74654C12.2641 6.82561 12.2781 6.91032 12.2777 7.00068Z"
                                                            fill="#BD837C" />
                                                    </svg>
                                                </a>
                                                <div class="date">
                                                    <p><?php echo time_ago_in_words(get_the_time('Y-m-d H:i:s')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; else: ?>
                            <h2>Sorry, no post have found.</h2>
                        <?php endif; ?>
                    </div>
                </div>
                <?php include 'templated-section/pagination.php'; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

