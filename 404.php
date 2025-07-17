<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/404-thankyou.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="template-404-thankyou global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="text">
                    <!-- <span>Lorem ipsum dolor sit amet</span> -->
                    <h1>Shutterbug Mishap: This Page is Out of Frame</h1>
                    <p>
                        It seems this page has wandered off our lens. Head back to our homepage or use the search bar.
                        Explore our latest projects for inspiration. If you think this is an error, let us know. We're
                        committed to capturing your moments beautifully, online .
                    </p>
                </div>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url(); ?>/" class="cta">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>