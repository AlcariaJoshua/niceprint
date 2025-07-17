<?php get_header(); ?>

<link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/privacy-policy-terms-and-conditions.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="privacy_policy_banner global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <h1>Privacy Policy</h1>
            <p>Nice Print Photo Team respects the privacy of our clients and visitors to our website ("you"). This
                Privacy Policy describes the types of information we collect about you, how we use that information, and
                your choices regarding the collection and use of your information.</p>
        </div>
    </div>
</section>

<section class="privacy_policy_content global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>