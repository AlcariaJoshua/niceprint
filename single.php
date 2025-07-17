<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/single.css">


<section class="content-banner global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="bread-crumbs">
                <a href="<?php echo get_home_url(); ?>/blogs/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                        <path
                            d="M1.56255 8.00008C1.56255 7.89843 1.57831 7.80312 1.60982 7.71417C1.64134 7.62522 1.69547 7.54262 1.77222 7.46638L6.8043 2.4343C6.95679 2.28181 7.13774 2.20557 7.34716 2.20557C7.55657 2.20557 7.73778 2.28181 7.89077 2.4343C8.04326 2.58678 8.1195 2.76469 8.1195 2.968C8.1195 3.17132 8.04326 3.34922 7.89077 3.50171L4.15484 7.23765L12.6941 7.23765C12.9101 7.23765 13.088 7.31084 13.2278 7.45723C13.3676 7.60362 13.4375 7.78457 13.4375 8.00008C13.4375 8.21611 13.3643 8.39731 13.2179 8.5437C13.0715 8.69009 12.8906 8.76303 12.6751 8.76252L4.15484 8.76252L7.89077 12.4985C8.04326 12.6509 8.1195 12.8288 8.1195 13.0322C8.1195 13.2355 8.04326 13.4134 7.89077 13.5659C7.73829 13.7184 7.55708 13.7946 7.34716 13.7946C7.13723 13.7946 6.95628 13.7184 6.8043 13.5659L1.77222 8.53379C1.69598 8.45755 1.64184 8.37495 1.60982 8.286C1.5778 8.19705 1.56204 8.10174 1.56255 8.00008Z"
                            fill="#BD837C" />
                    </svg>
                    Return to Blogs
                </a>
            </div>

            <div class="title-share-btn">
                <h1><?php echo get_the_title(); ?></h1>

                <div class="writer-share-con">
                    <p class="writer"><?php echo get_the_author(); ?>, <?php echo get_the_date(); ?></p>
                    <div class="share-link-con">
                        <p>Share:</p>
                        <div class="share-link">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                                target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink1.png"
                                    alt="facebook">
                            </a>
                            <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                                target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink2.png"
                                    alt="twitter">
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                                target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink3.png"
                                    alt="linkedIn">
                            </a>
                            <a href="https://telegram.me/share/url?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                                target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink4.png"
                                    alt="telegram">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content">
               

                <?php the_content(); ?>

                <div class="share-link-con">
                    <p>Share:</p>
                    <div class="share-link">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                            target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink1.png"
                                alt="facebook">
                        </a>
                        <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                            target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink2.png"
                                alt="twitter">
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>"
                            target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink3.png"
                                alt="linkedIn">
                        </a>
                        <a href="https://telegram.me/share/url?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                            target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/sharelink4.png"
                                alt="telegram">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>




</section>


<section class="you-may-also-link-blogs global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <h2>You May Also Like</h2>
            <div class="card-con">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $blogPosts = array(
                    'paged' => $paged,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'order' => 'desc',
                    'post__not_in' => array($post->ID),
                );
                $blogs = new WP_Query($blogPosts);
                if ($blogs->have_posts()):
                    while ($blogs->have_posts()):
                        $blogs->the_post();
                        $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        ?>
                        
                            <div class="card">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="image">
                                        <?php
                                        // Get the URL of the featured image
                                        $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                        ?>
                                        <img src="<?php echo esc_url($featuredIMG[0]); ?>" alt="<?php the_title_attribute(); ?>">
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
                                        <p>
                                        <?php echo reading_time(); ?>
                                        </p>
                                        </div>
                                        <h3><?php echo wp_trim_words(apply_filters('the_title', get_the_title()), 8, '. . .'); ?>
                                        </h3>
                                        <p><?php echo wp_trim_words(apply_filters('the_content', get_the_content()), 12, '. . .'); ?>
                                        </p>
                                    </div>
                                    <div class="btn-btn">
                                        <a href="<?php echo get_permalink(); ?>" target="_blank"  class="stretched-link">
                                            Read More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none">
                                                <path
                                                    d="M12.2782 7.0002C12.2782 7.09056 12.2642 7.17527 12.2361 7.25434C12.2081 7.33341 12.16 7.40683 12.0918 7.4746L7.61883 11.9476C7.48329 12.0831 7.32244 12.1509 7.13629 12.1509C6.95015 12.1509 6.78908 12.0831 6.65308 11.9476C6.51754 11.812 6.44976 11.6539 6.44976 11.4732C6.44976 11.2924 6.51754 11.1343 6.65308 10.9988L9.97391 7.67792L2.38343 7.67792C2.19141 7.67792 2.03328 7.61286 1.90903 7.48273C1.78478 7.35261 1.72266 7.19177 1.72266 7.0002C1.72266 6.80818 1.78772 6.6471 1.91784 6.51698C2.04796 6.38686 2.20881 6.32202 2.40038 6.32247L9.97391 6.32247L6.65308 3.00164C6.51753 2.8661 6.44976 2.70796 6.44976 2.52723C6.44976 2.34651 6.51753 2.18837 6.65308 2.05283C6.78862 1.91729 6.9497 1.84951 7.13629 1.84951C7.32289 1.84951 7.48374 1.91729 7.61883 2.05283L12.0918 6.52579C12.1596 6.59356 12.2077 6.66698 12.2361 6.74605C12.2646 6.82512 12.2786 6.90983 12.2782 7.0002Z"
                                                    fill="#BD837C" />
                                            </svg>
                                        </a>
                                        <div class="date">
                                            <p><?php echo time_ago_in_words(get_the_time('Y-m-d H:i:s')); ?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        
                    <?php endwhile; else: ?>
                    <h2>Sorry, no post have found.</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>