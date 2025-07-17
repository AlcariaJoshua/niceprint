<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php wp_title(); ?></title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="https://niceprintphoto.com/wp-content/uploads/2021/05/cropped-np-favicon-32x32.png"
        sizes="32x32" />

        <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-minimal.min.css">
    


    <?php wp_head(); ?>



</head>

<?php include 'stylesheetmanager.php'; ?>


<body <?php body_class(); ?> >

    <nav class="navbar navbar-expand-xxl sticky-top">

        <div class="container-fluid wrapper-header">

            <a class="navbar-brand" href="<?php echo get_home_url();  ?>/">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/niceprintlogo.png" alt="ncieprint" />

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <?php

                wp_nav_menu(

                    array(

                        'Primary Menu' => 'Nice Print Menu',

                        'menu_class' => 'navbar-nav',

                        'container-fluid' => true

                    )

                );

                ?>


            </div>

        </div>

    </nav>

