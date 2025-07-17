<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>inc/css/single-template.css">

<section class="you-may-also-like global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <h2>You May Also Like</h2>
                </div>
                <div class="card-container">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // Determine the post type based on the category
                    if (has_category('category-slug-1')) {
                        $post_type = 'different_post_type';
                    } elseif (has_category('category-slug-2')) {
                        $post_type = 'another_post_type';
                    } elseif (has_category('category-slug-3')) {
                        $post_type = 'yet_another_post_type';
                    } else {
                        $post_type = 'international';
                    }

                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => $post_type,
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'order' => 'ASC',
                    );
                    $blogs = new WP_Query($blogPosts);
                    if ($blogs->have_posts()):
                        while ($blogs->have_posts()):
                            $blogs->the_post();
                            $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                            ?>
                            <div class="card">
                                <a href="<?php echo get_the_permalink(); ?>" target="_blank" >
                                    <div class="content">
                                        <?php if (has_post_thumbnail()): ?>
                                            <div class="also-like-image">
                                                <?php
                                                // Get the URL of the featured image
                                                $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                                ?>
                                                <img src="<?php echo esc_url($featuredIMG[0]); ?>"
                                                    alt="<?php the_title_attribute(); ?>">
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
            </div>
        </div>
    </div>
</section>