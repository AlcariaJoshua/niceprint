<?php get_header(); ?>

<link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/privacy-policy-terms-and-conditions.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="terms_and_conditions_banner global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <h1>Terms and Conditions</h1>
            <p>Nice Print Photo is a premier provider of photography and videography services. By accessing or using our
                services, you agree to comply with and be bound by these Terms and Conditions ("Terms"). If you do not
                agree with these Terms, please do not use our services.</p>
        </div>
    </div>
</section>

<section class="terms_and_conditions_content global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>