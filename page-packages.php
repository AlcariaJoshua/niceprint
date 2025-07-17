<?php get_header();

/**
 * Template Name: Packages
 */


?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/packages.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="banner global-padding ">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <!-- <span>Nisi Mam Tristique Hurpis</span> -->
                <h1>Your Unique Story, Our Exceptional Lens: Craft Your Incredible Memories</h1>
                <p>Nice Print Photo’s packages are more than just photos and videos. They are your avenue to capture
                    life’s precious moments. Big or small, we have a curated set to fit what you need in your
                    storytelling journey. So, explore our options and let’s create a visual treasure of your most
                    unforgettable memories!
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('templated-section/package', 'section'); ?>

<?php include 'templated-section/contact-section.php'; ?>

<?php include 'templated-section/message-us.php'; ?>

<?php get_footer(); ?>