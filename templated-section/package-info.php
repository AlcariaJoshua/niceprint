<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/lp-template.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">

<section class="package-info global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content">
                <h2>
                    <?php
                    $package_title = get_field('package_title');
                    if ($package_title) {
                        echo $package_title;
                    } else {
                        echo 'No title found';
                    }
                    ?>
                </h2>
                <p>
                    <?php
                    $package_text = get_field('package_text');
                    if ($package_text) {
                        echo $package_text;
                    } else {
                        echo 'No text found';
                    }
                    ?>
                </p>
                <div class="btn-btn">
                    <a href="<?php
                    $package_link = get_field('package_link');
                    if ($package_link) {
                        echo $package_link;
                    } else {
                        echo '#';
                    }
                    ?>" class="cta" target="_blank">View Packages</a>
                </div>
            </div>
        </div>
    </div>
</section>