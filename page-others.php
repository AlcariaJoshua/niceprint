<?php get_header();

/**
 * Template Name: Others
 */

?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/others.css">

<section class="others-banner global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <div class="text">
                    <!-- <span>Hendrerit Molestie Tortor Nec</span> -->
                    <h1>Preserving Memories For All Occasions</h1>
                    <p>We are not defined by one special event. Experience our versatility and expertise in capturing an
                        array of celebrations. From tearjerking family reunions to marking a new age in life, Nice Print
                        Photo are your partners for your visual keepsakes.
                    </p>
                </div>
                <div class="collecttion-container">
                    <a href="<?php echo get_home_url(); ?>/birthday-collections/" target="_blank">
                        <div class="card">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/others/other1.jpg"
                                    alt="picture 1">
                            </div>
                            <div class="card-text">
                                <!-- <span>Lorem Ipsum</span> -->
                                <h4>Birthday Collections</h4>
                                <p>
                                    From intimate gatherings to extravagant parties, celebrate another year around the
                                    sun in full style with our team. We’ll transform memories into cherished treasures.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/prenup-collections/" target="_blank">
                        <div class="card">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/others/other2.jpg"
                                    alt="picture 2">
                            </div>
                            <div class="card-text">
                                <!-- <span>Lorem Ipsum</span> -->
                                <h4>Prenup Collections</h4>
                                <p>Our prenup services are dedicated to capturing all the love before the ‘I do’. We’ll
                                    help you tell your unique and blossoming love story from the very beginning.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/kiddie/" target="_blank">
                        <div class="card">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/others/other3.jpg"
                                    alt="picture 3">
                            </div>
                            <div class="card-text">
                                <!-- <span>Lorem Ipsum</span> -->
                                <h4>Kiddie Collections</h4>
                                <p>Every second matters with your special one. Whether it is capturing wacky birthdays
                                    or simple portraits, we will preserve their every precious milestone.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo get_home_url(); ?>/corporate/" target="_blank">
                        <div class="card">
                            <div class="image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/others/other4.jpg"
                                    alt="picture 4">
                            </div>
                            <div class="card-text">
                                <!-- <span>Lorem Ipsum</span> -->
                                <h4>Corporate Collections</h4>
                                <p>Capture your brand’s vision or office event with Nice Print Photo. From laidback
                                    gatherings to elaborate occasions, our cameras will frame your moments in high
                                    definition.
                                </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="package-info global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2>No Matter the Special Occasion
                    Transform Them Into Timeless Keepsakes</h2>
                <p>Don’t let moments simply fade away. With Nice Print Photo, every event is worth the effort. Discover
                    how we can preserve your special days with our handpicked packages.
                </p>
                <div class="btn-btn">
                    <a href="<?php echo get_home_url() ?>/packages/" class="cta" target="_blank">View Packages</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'templated-section/message-us.php'; ?>


<?php get_footer(); ?>