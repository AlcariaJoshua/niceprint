<style>
    .blogs {
        background: #333033;
    }

    .blogs-con {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .blogs-con .card {
        padding: 10px;
        height: 100%;
    }

    .blogs-con .card h5 {
        color: #212121;
        margin-bottom: 16px;
    }

    .blogs-con .card p {
        color: rgba(85, 79, 86, 0.80);
    }

    .blogs-con .card span {
        color: #BD837C;
        font-family: "Epilogue", sans-serif;
    }

    .blogs-con .sub-title {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 12px;
    }

    .blogs-con .sub-title hr {
        width: 6px;
        height: 1px;
        background: #DEDEDE;
    }

    .blogs-con .sub-title p {
        font-size: 12px;
        opacity: 0.3;
    }

    .blogs-con .sub-card {
        display: grid;
        gap: 30px;
        grid-template-rows: repeat(3, 1fr);
    }

    .blogs-con .sub-card .card {
        flex-direction: row;
        align-items: center;
    }

    .blogs-con .card .images {
        height: 100%;
        width: 100%;

    }

    .blogs-con .card .content {
        padding: 10px 15px;
    }



    .blogs-con .sub-card .card h5 {
        margin-bottom: 0px;
        font-size: 20px;
    }

    .blogs-con .sub-card .card .content {
        padding: 0px 15px;
        width: 100%;
    }


    .blog-title {
        border-bottom: 1px solid #acacac;
        padding-bottom: 15px;
    }

    .blogs-con .btn-btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
    }

    .blogs-con .btn-btn a {
        color: #bd837c;
        transition: all ease 0.5s;
    }

    .blogs-con .btn-btn a:hover {
        color: #b34457;
        transition: all ease 0.5s;
    }

    .blogs-con .btn-btn .date p {
        color: #2c3a4b;
        opacity: 0.5;
    }


    .blogs .text {
        text-align: center;
        margin-bottom: 60px;
    }

    .blogs .text span {
        color: rgba(255, 255, 255, 0.80);
        margin-bottom: 12px;
        font-family: "Cardo", serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 130%;
        /* 20.8px */
        letter-spacing: 2.4px;

    }

    .blogs-con .btn-btn a:hover svg path {
        fill: #b34457;
        transition: all ease 0.5s;
    }

    .blogs-con .btn-btn a:hover svg {
        margin-left: 5px;
        transition: all ease 0.5s;
    }

    .card .images {
        overflow: hidden;
    }

    .card .images img {
        transition: all ease .5s;
    }

    .card:hover .images img {
        transform: scale(1.2);
        transition: all ease .5s;
    }


    .blogs-con .sub-card .card .images {
        max-height: 225px;
        max-width: 295px;
    }

    @media(max-width: 991px) {

        .blogs-con {
            grid-template-columns: repeat(1, 1fr);
        }

        .blogs-con .sub-card .card .images {
            max-width: 400px;
        }

    }


    @media(max-width: 575px) {

        .blogs-con .sub-card .card {
            flex-direction: column;
            gap: 20px;
        }

        .blogs-con .sub-card .card .images {
            max-width: unset;
        }


    }
</style>

<section class="blogs global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <span>Featured Blogs From Us</span>
                    <h1>In Focus: Stories, Trends, and Events</h1>
                </div>

                <?php if (is_home() || is_front_page()): ?>

                    <style>
                        .blogs .text {
                            display: none;
                        }

                        .featured-blogs .title-button {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-bottom: 60px;
                        }

                        .featured-blogs .title-button .featured-title span {
                            margin-bottom: 12px;
                        }

                        @media(max-width: 991px) {


                            .featured-blogs .title-button {
                                flex-direction: column;
                                text-align: center;
                                gap: 30px;
                            }
                        }
                    </style>

                    <div class="featured-blogs">
                        <div class="title-button">
                            <div class="featured-title">
                                <span>Featured Blogs From Us</span>
                                <h2>Discover and Be Inspired From Our Latest Blogs</h2>
                            </div>
                            <div class="btn-btn">
                                <a href="<?php echo get_home_url(); ?>/blogs/" class="cta" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

                <div class="blogs-con">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $blogPosts = array(
                        'paged' => $paged,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_tag',
                                'field' => 'slug',
                                'terms' => 'featured',
                            ),
                        ),
                    );
                    $blogsSec = new WP_Query($blogPosts);
                    if ($blogsSec->have_posts()):
                        while ($blogsSec->have_posts()):
                            $blogsSec->the_post();
                            $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                            ?>
                            <div class="card main-card">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="images">
                                        <?php
                                        // Get the URL of the featured image
                                        $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                        ?>
                                        <img src="<?php echo esc_url($featuredIMG[0]); ?>" alt="<?php the_title_attribute(); ?>">
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
                                        <a href="<?php echo get_the_permalink(); ?>" target="_blank" class="stretched-link">Read
                                            More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none">
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
                        <?php endwhile; else: ?>
                        <h2>Sorry, no more featured blogs</h2>
                    <?php endif; ?>
                    <div class="sub-card">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $blogPosts = array(
                            'paged' => $paged,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'order' => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_tag',
                                    'field' => 'slug',
                                    'terms' => 'featured',
                                ),
                            ),
                            'post__not_in' => array($post->ID),
                            
                        );
                        $blogsSec = new WP_Query($blogPosts);
                        if ($blogsSec->have_posts()):
                            while ($blogsSec->have_posts()):
                                $blogsSec->the_post();
                                $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                                ?>
                                <div class="card">
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="images">
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
                                            <h5><?php echo wp_trim_words(apply_filters('the_title', get_the_title()), 8, '. . .'); ?>
                                            </h5>
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
                            <?php endwhile; else: ?>
                            <h2>Sorry, no more featured blogs</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>