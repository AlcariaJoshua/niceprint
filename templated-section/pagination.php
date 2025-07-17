


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/blogs.css">

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
    $total_pages = $blogs->max_num_pages;

    echo '<div class="pagination other-blogs-pagination">';
    echo custom_paginate_links($total_pages, $current_page);
    echo '</div>';
    ?>
</div>




<script>
    jQuery(document).ready(function ($) {
        // Get the current page from the query parameter
        var currentPage = <?php echo json_encode($current_page); ?>;

        // Add 'current' class to the corresponding pagination link
        $('.pagination-link').filter(function () {
            return $(this).text() == currentPage;
        }).addClass('current');
    });
</script>


