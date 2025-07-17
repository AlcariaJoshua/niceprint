<?php

if (!function_exists('niceprint_theme_setup')):

    function niceprint_theme_setup()
    {

        add_theme_support('post-thumbnails');

        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        register_nav_menus(
            array(

                'primary' => __('Primary Menu', 'niceprint Header')

            )
        );

        add_theme_support('woocommerce');

        add_theme_support('wc-product-gallery-zoom');

        add_theme_support('wc-product-gallery-lightbox');

        add_theme_support('wc-product-gallery-slider');

    }

endif;

add_action('after_setup_theme', 'niceprint_theme_setup');

function time_ago_in_words($time)
{
    $time_difference = current_time('timestamp') - strtotime($time);

    if ($time_difference < 1) {
        return 'Just now';
    }

    $condition = array(
        12 * 30 * 24 * 60 * 60 => 'year',
        30 * 24 * 60 * 60 => 'month',
        24 * 60 * 60 => 'day',
        60 * 60 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($condition as $secs => $str) {
        $d = $time_difference / $secs;

        if ($d >= 1) {
            $t = round($d);
            return $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
        }
    }
}


function reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Assuming an average reading speed of 200 words per minute

    if ($reading_time == 1) {
        $timer = " min read";
    } else {
        $timer = " mins read";
    }

    $total_reading_time = $reading_time . $timer;

    return $total_reading_time;
}
