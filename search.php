<?php get_header();


/**
 * Template Name: Search 
 */
global $wp_query;
$s = $_GET['s'];
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blogs.css">


<style>
    .seacrh-page {
        background: #333033;
    }

    .blogs-con .card {
        padding: 10px;
        height: 100%;
    }

    .blogs-con .card h5 {
        color: #212121;
        height: 100%;
        min-height: 124px;
    }

    .blogs-con .card p {
        color: #121212;
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
        min-height: unset;
        opacity: 0.3;
    }

    .blog-title p {
        height: 100%;
        min-height: 72px;
    }

    .blogs-con .sub-card {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .blogs-con .sub-card .card {
        flex-direction: row;
        align-items: center;
    }

    .blogs-con .card .image {
        height: 100%;
        width: 100%;
        max-height: 280px;
        min-height: 280px;

    }

    .blogs-con .card .content {
        padding: 10px 15px;
    }

    .blogs-con .sub-card .card .image {
        max-height: 190px;
    }

    .blogs-con .sub-card .card h5 {
        margin-bottom: 0px;
        font-size: 20px;
    }

    .blogs-con .sub-card .card .content {
        padding: 0px 15px;
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


    .seacrh-page .text {
        text-align: center;
        margin-bottom: 60px;
    }

    .seacrh-page .text span {
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

    .card .image {
        overflow: hidden;
    }

    .card .image img {
        transition: all ease .5s;
    }

    .blogs-con .row {
        row-gap: 30px;

    }

    .card:hover .image img {
        transform: scale(1.2);
        transition: all ease .5s;
    }

    .blogs-con {
        margin-bottom: 60px;
    }

    @media(max-width: 991px) {


        .blogs-con .sub-card .card .image {
            max-width: 400px;
        }

        .blogs-con .sub-card .card .image {
            max-height: unset;
        }

        .blogs-con .card h5 {
            min-height: 93px;
            margin-bottom: 15px;
        }
    }


    @media(max-width: 767px){
        .blogs-con .card h5 {
            min-height: unset;
        }

        .blog-title p {
            min-height: unset;
        }
    }

    @media(max-width: 575px) {

        .blogs-con .sub-card .card {
            flex-direction: column;
            gap: 20px;
        }

        .blogs-con .sub-card .card .image {
            max-width: unset;
        }
    }
</style>


<section class="seacrh-page global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="text">
                <h1>Search Results Page for <div class="colored">"<?php echo $s; ?>"</div>
                </h1>
            </div>

            <div class="blogs-con">
                <div class="row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        's' => $s,
                        'paged' => $paged,
                        'post_type' => array(
                            'post',
                            'wedding',
                            'birthday',
                            'concept',
                            'corporate',
                            'kiddie',
                            'prenup',
                            'international'
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => 9,
                        'order' => 'ASC',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
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
                                            <a href="<?php echo get_the_permalink(); ?>" class="stretched-link"
                                                target="_blank">Read More
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
                        <h2>Sorry, no result for "<?php echo $s; ?>"</h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pagination">
                <?php
                function custom_paginate_links($total_pages, $current_page)
                {
                    $pagination = '';

                    // Calculate the range of page numbers to display
                    $start_page = 1;
                    $end_page = $total_pages;

                    // Display the previous button
                    if ($current_page > 1) {
                        $pagination .= sprintf(
                            '<a href="%s" class="prev">%s</a>',
                            esc_url(get_pagenum_link($current_page - 1)),
                            'Previous'
                        );
                    }

                    // Display numbered pages
                    for ($i = $start_page; $i <= $end_page; $i++) {
                        $class = ($i === $current_page) ? 'current' : '';
                        $pagination .= sprintf(
                            '<a href="%s" class="%s">%d</a>',
                            esc_url(get_pagenum_link($i)),
                            esc_attr($class),
                            $i
                        );
                    }

                    // Display the next button
                    if ($current_page < $total_pages) {
                        $pagination .= sprintf(
                            '<a href="%s" class="next">%s</a>',
                            esc_url(get_pagenum_link($current_page + 1)),
                            'Next'
                        );
                    }

                    return $pagination;
                }

                $current_page = max(1, get_query_var('paged'));
                $total_pages = $wp_query->max_num_pages;

                echo '<div class="pagination other-blogs-pagination">';
                echo custom_paginate_links($total_pages, $current_page);
                echo '</div>';
                ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>