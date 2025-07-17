<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/homepage.css">


<section class="homepage-banner">
        <div class="banner-content">
            <div class="slider-one owl-carousel owl-theme">
                <div class="item">
                    <div class="image-banner global-padding">

                    </div>
                </div>
                <div class="item">
                    <div class="image-banner image-banner2 global-padding">

                    </div>
                </div>
                <div class="item">
                    <div class="image-banner image-banner3 global-padding">

                    </div>
                </div>
                <div class="item">
                    <div class="image-banner image-banner4 global-padding">

                    </div>
                </div>
            </div>
            <div class="homepage-text">
                <div class="container-fluid">
                    <div class="text-con">
                        <div class="text">
                            <span>Capturing Moments Creating Memories</span>
                            <h1>Making Every Smile, Every Laugh, and Every Tear Timeless</h1>
                            <p>Believing in the power of storytelling, Nice Print Photo preserves the essence of your
                                special moments. From weddings and birthdays to personal milestones, we meticulously
                                capture the heart and soul of fleeting seconds, offering you simple treasures in
                                pictures and videos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
</section>


<section class="about-us global-padding">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="about-con">
                <div class="images">
                    <img class="img1"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/image1about.webp"
                        alt="image1">
                    <img class="img2"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/image2about.webp"
                        alt="image2">
                </div>
                <div class="title">
                    <span>More About Us</span>
                    <h2>Your Trusted Imagery Storytelling Partner</h2>
                    <p>At Nice Print Photo, creating and capturing memories are the center of our mission. We believe
                        that every minute is worth preserving. Dedicated to our craft, we ensure that your event is shot
                        with precision and passion.
                    </p>
                    <p>
                        Our team of professional photographers and videographers offers a clear and attentive eye on
                        your special day. From weddings and engagements to birthdays and family trips, we approach each
                        project with genuine enthusiasm and abundant creativity.
                    </p>
                    <div class="btn-btn">
                        <a href="<?php echo get_home_url(); ?>/about/" target="_blank" class="cta">Learn More About Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                                fill="none">
                                <path
                                    d="M14.5972 8.50012C14.5972 8.61308 14.5797 8.71897 14.5447 8.8178C14.5097 8.91664 14.4495 9.00841 14.3643 9.09313L8.77305 14.6843C8.60362 14.8538 8.40256 14.9385 8.16988 14.9385C7.9372 14.9385 7.73586 14.8538 7.56586 14.6843C7.39643 14.5149 7.31172 14.3172 7.31172 14.0913C7.31172 13.8654 7.39643 13.6677 7.56586 13.4983L11.7169 9.34727L2.2288 9.34728C1.98878 9.34728 1.79111 9.26595 1.6358 9.1033C1.48049 8.94064 1.40283 8.73958 1.40283 8.50012C1.40283 8.2601 1.48416 8.05876 1.64681 7.8961C1.80946 7.73345 2.01052 7.65241 2.24998 7.65297L11.7169 7.65297L7.56586 3.50193C7.39643 3.3325 7.31172 3.13483 7.31172 2.90892C7.31172 2.68301 7.39643 2.48535 7.56586 2.31592C7.73529 2.14649 7.93663 2.06177 8.16988 2.06177C8.40313 2.06177 8.60419 2.14649 8.77305 2.31592L14.3643 7.90712C14.449 7.99183 14.5091 8.08361 14.5447 8.18244C14.5803 8.28128 14.5978 8.38717 14.5972 8.50012Z"
                                    fill="#BD837C" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="moving-num-con">
                <div class="moving-number">
                    <p>Thousands</p>
                    <h5>Captured memorable moments for Happy clients</h2>
                </div>
                <div class="moving-number">
                    <div class="count-con">
                        <p class="counter">00</p>
                        <p>Years</p>
                    </div>

                    <h5>Years of professional photography experience</h5>
                </div>
                <div class="moving-number">
                    <p>Hundreds</p>
                    <h5>Works with notable personalities projects</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_template_part('templated-section/package', 'section'); ?>

<?php get_template_part('templated-section/productsWorks', 'section'); ?>


<section class="video-gallery global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="title">
                <span>Video Gallery</span>
                <h2>Explore Amazing Videos We Create</h2>
                <p>When photo are not enough to preserve your moments, videos can lengthen these fleeting seconds so
                    you can treasure them forever. Each clip is masterfully shot to enhance the story of your occasion.
                </p>
            </div>
            <div class="carousel-con">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="video">
                                <div class="thumbnail-img video-thumbnail-main">
                                    <img class=""
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/thumb1.png"
                                        alt="thumbnail1">
                                    <button class="solid-red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="78" height="78"
                                            viewBox="0 0 78 78" fill="none">
                                            <path
                                                d="M12.2536 66.3991C8.57645 62.8476 5.64344 58.5994 3.62569 53.9022C1.60795 49.2051 0.545876 44.1531 0.501454 39.0411C0.457032 33.9291 1.43115 28.8594 3.36696 24.1279C5.30278 19.3964 8.16152 15.0978 11.7764 11.4829C15.3913 7.86806 19.6899 5.00932 24.4214 3.0735C29.1529 1.13769 34.2225 0.163575 39.3345 0.207997C44.4465 0.252419 49.4985 1.31449 54.1957 3.33223C58.8928 5.34998 63.1411 8.283 66.6926 11.9601C73.7057 19.2213 77.5863 28.9465 77.4985 39.0411C77.4108 49.1357 73.3618 58.7919 66.2236 65.9302C59.0854 73.0684 49.4291 77.1174 39.3345 77.2051C29.24 77.2928 19.5148 73.4122 12.2536 66.3991ZM61.2641 60.9706C67.0434 55.1913 70.2902 47.3528 70.2902 39.1796C70.2902 31.0064 67.0434 23.168 61.2641 17.3886C55.4848 11.6093 47.6463 8.36251 39.4731 8.36251C31.2999 8.36251 23.4614 11.6093 17.6821 17.3886C11.9028 23.168 8.65597 31.0064 8.65597 39.1796C8.65597 47.3528 11.9028 55.1913 17.6821 60.9706C23.4614 66.75 31.2999 69.9968 39.4731 69.9968C47.6463 69.9968 55.4848 66.75 61.2641 60.9706ZM27.9231 23.7796L58.7231 39.1796L27.9231 54.5796V23.7796Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="video-overlay-main" style="display: none;">
                                    <div style="padding:41.67% 0 0 0;position:relative;"><iframe
                                            class="video-iframe-main"
                                            src="https://player.vimeo.com/video/953395810?h=3a15f6a5bc&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            title="NASH MICA SDE VIDEO"></iframe></div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Thumbnail images -->
                <div class="d-flex justify-content-center thumbnailss thumbnails-container">
                    <!-- new -->
                    <div class="video">
                        <div class="thumbnail-img video-thumbnail">
                            <img class=""
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/thumb2.png"
                                alt="thumbnail2">
                            <button class="solid-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="78" height="78" viewBox="0 0 78 78"
                                    fill="none">
                                    <path
                                        d="M12.2536 66.3991C8.57645 62.8476 5.64344 58.5994 3.62569 53.9022C1.60795 49.2051 0.545876 44.1531 0.501454 39.0411C0.457032 33.9291 1.43115 28.8594 3.36696 24.1279C5.30278 19.3964 8.16152 15.0978 11.7764 11.4829C15.3913 7.86806 19.6899 5.00932 24.4214 3.0735C29.1529 1.13769 34.2225 0.163575 39.3345 0.207997C44.4465 0.252419 49.4985 1.31449 54.1957 3.33223C58.8928 5.34998 63.1411 8.283 66.6926 11.9601C73.7057 19.2213 77.5863 28.9465 77.4985 39.0411C77.4108 49.1357 73.3618 58.7919 66.2236 65.9302C59.0854 73.0684 49.4291 77.1174 39.3345 77.2051C29.24 77.2928 19.5148 73.4122 12.2536 66.3991ZM61.2641 60.9706C67.0434 55.1913 70.2902 47.3528 70.2902 39.1796C70.2902 31.0064 67.0434 23.168 61.2641 17.3886C55.4848 11.6093 47.6463 8.36251 39.4731 8.36251C31.2999 8.36251 23.4614 11.6093 17.6821 17.3886C11.9028 23.168 8.65597 31.0064 8.65597 39.1796C8.65597 47.3528 11.9028 55.1913 17.6821 60.9706C23.4614 66.75 31.2999 69.9968 39.4731 69.9968C47.6463 69.9968 55.4848 66.75 61.2641 60.9706ZM27.9231 23.7796L58.7231 39.1796L27.9231 54.5796V23.7796Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal video-modal" id="modal1">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="video-overlay thumbnail-img">
                                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                            src="https://player.vimeo.com/video/953395081?h=14b1015bba&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            title="Turnbull-Tan SDE"></iframe></div>

                                </div>
                                <script src="https://player.vimeo.com/api/player.js"></script>

                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="thumbnail-img video-thumbnail">
                            <img class=""
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/thumb3.png"
                                alt="thumbnail3">
                            <button class="solid-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="78" height="78" viewBox="0 0 78 78"
                                    fill="none">
                                    <path
                                        d="M12.2536 66.3991C8.57645 62.8476 5.64344 58.5994 3.62569 53.9022C1.60795 49.2051 0.545876 44.1531 0.501454 39.0411C0.457032 33.9291 1.43115 28.8594 3.36696 24.1279C5.30278 19.3964 8.16152 15.0978 11.7764 11.4829C15.3913 7.86806 19.6899 5.00932 24.4214 3.0735C29.1529 1.13769 34.2225 0.163575 39.3345 0.207997C44.4465 0.252419 49.4985 1.31449 54.1957 3.33223C58.8928 5.34998 63.1411 8.283 66.6926 11.9601C73.7057 19.2213 77.5863 28.9465 77.4985 39.0411C77.4108 49.1357 73.3618 58.7919 66.2236 65.9302C59.0854 73.0684 49.4291 77.1174 39.3345 77.2051C29.24 77.2928 19.5148 73.4122 12.2536 66.3991ZM61.2641 60.9706C67.0434 55.1913 70.2902 47.3528 70.2902 39.1796C70.2902 31.0064 67.0434 23.168 61.2641 17.3886C55.4848 11.6093 47.6463 8.36251 39.4731 8.36251C31.2999 8.36251 23.4614 11.6093 17.6821 17.3886C11.9028 23.168 8.65597 31.0064 8.65597 39.1796C8.65597 47.3528 11.9028 55.1913 17.6821 60.9706C23.4614 66.75 31.2999 69.9968 39.4731 69.9968C47.6463 69.9968 55.4848 66.75 61.2641 60.9706ZM27.9231 23.7796L58.7231 39.1796L27.9231 54.5796V23.7796Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal video-modal" id="modal1">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="video-overlay thumbnail-img">
                                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                            src="https://player.vimeo.com/video/953393918?h=10db9c1f68&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            title="Lowndes-Gliponeo Boracay SDE"></iframe></div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="thumbnail-img video-thumbnail">
                            <img class=""
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/thumb4.png"
                                alt="thumbnail3">
                            <button class="solid-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="78" height="78" viewBox="0 0 78 78"
                                    fill="none">
                                    <path
                                        d="M12.2536 66.3991C8.57645 62.8476 5.64344 58.5994 3.62569 53.9022C1.60795 49.2051 0.545876 44.1531 0.501454 39.0411C0.457032 33.9291 1.43115 28.8594 3.36696 24.1279C5.30278 19.3964 8.16152 15.0978 11.7764 11.4829C15.3913 7.86806 19.6899 5.00932 24.4214 3.0735C29.1529 1.13769 34.2225 0.163575 39.3345 0.207997C44.4465 0.252419 49.4985 1.31449 54.1957 3.33223C58.8928 5.34998 63.1411 8.283 66.6926 11.9601C73.7057 19.2213 77.5863 28.9465 77.4985 39.0411C77.4108 49.1357 73.3618 58.7919 66.2236 65.9302C59.0854 73.0684 49.4291 77.1174 39.3345 77.2051C29.24 77.2928 19.5148 73.4122 12.2536 66.3991ZM61.2641 60.9706C67.0434 55.1913 70.2902 47.3528 70.2902 39.1796C70.2902 31.0064 67.0434 23.168 61.2641 17.3886C55.4848 11.6093 47.6463 8.36251 39.4731 8.36251C31.2999 8.36251 23.4614 11.6093 17.6821 17.3886C11.9028 23.168 8.65597 31.0064 8.65597 39.1796C8.65597 47.3528 11.9028 55.1913 17.6821 60.9706C23.4614 66.75 31.2999 69.9968 39.4731 69.9968C47.6463 69.9968 55.4848 66.75 61.2641 60.9706ZM27.9231 23.7796L58.7231 39.1796L27.9231 54.5796V23.7796Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal video-modal" id="modal1">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="video-overlay thumbnail-img">
                                    <div style="padding:41.67% 0 0 0;position:relative;"><iframe
                                            src="https://player.vimeo.com/video/953393170?h=6ebe807a05&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            title="glassman x manzano sdenl"></iframe></div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="thumbnail-img video-thumbnail">
                            <img class=""
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/thumb5.png"
                                alt="thumbnail3">
                            <button class="solid-red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="78" height="78" viewBox="0 0 78 78"
                                    fill="none">
                                    <path
                                        d="M12.2536 66.3991C8.57645 62.8476 5.64344 58.5994 3.62569 53.9022C1.60795 49.2051 0.545876 44.1531 0.501454 39.0411C0.457032 33.9291 1.43115 28.8594 3.36696 24.1279C5.30278 19.3964 8.16152 15.0978 11.7764 11.4829C15.3913 7.86806 19.6899 5.00932 24.4214 3.0735C29.1529 1.13769 34.2225 0.163575 39.3345 0.207997C44.4465 0.252419 49.4985 1.31449 54.1957 3.33223C58.8928 5.34998 63.1411 8.283 66.6926 11.9601C73.7057 19.2213 77.5863 28.9465 77.4985 39.0411C77.4108 49.1357 73.3618 58.7919 66.2236 65.9302C59.0854 73.0684 49.4291 77.1174 39.3345 77.2051C29.24 77.2928 19.5148 73.4122 12.2536 66.3991ZM61.2641 60.9706C67.0434 55.1913 70.2902 47.3528 70.2902 39.1796C70.2902 31.0064 67.0434 23.168 61.2641 17.3886C55.4848 11.6093 47.6463 8.36251 39.4731 8.36251C31.2999 8.36251 23.4614 11.6093 17.6821 17.3886C11.9028 23.168 8.65597 31.0064 8.65597 39.1796C8.65597 47.3528 11.9028 55.1913 17.6821 60.9706C23.4614 66.75 31.2999 69.9968 39.4731 69.9968C47.6463 69.9968 55.4848 66.75 61.2641 60.9706ZM27.9231 23.7796L58.7231 39.1796L27.9231 54.5796V23.7796Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal video-modal" id="modal1">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div class="video-overlay thumbnail-img">
                                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                            src="https://player.vimeo.com/video/953392202?h=939bf233d1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            title="Loo-Soriano SDE"></iframe></div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-chooseus global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="first-sec">
                <div class="title">
                    <span>Why Choose Us</span>
                    <h2>A Dedication to Treasuring Your Special Seconds</h2>
                    <p>
                        Capturing life's most precious moments needs experiences. With years of industry expertise and
                        hundreds of satisfied clients, our team is your trusted partner in photography and videography.
                    </p>
                    <p>
                        Versatility is in our range when it comes to working for every milestone you can imagine. Not
                        only that, but while we find ways to ensure that the heart of your occasion is captured, we also
                        make sure that you have every angle delicately preserved through our camera.
                    </p>
                </div>
                <div class="images">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/whychoose.webp"
                        alt="Why Choose Us">
                </div>
            </div>
            <div class="second-sec">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wine.png"
                                alt="wine">
                            <h5>Personalized Services</h5>
                            <p>With over a decade of experience, our team brings extensive knowledge and skill to every
                                photohoot, ensuring exceptional results and a seamless experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/ring (2).png"
                                alt="Award-Winning Photography">
                            <h5>Award-Winning Photography</h5>
                            <p>Our work has been honored with prestigious awards, reflecting our commitment to
                                excellence and creaativity in every image we capture.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/dance.png"
                                alt="dance">
                            <h5>International Recognition</h5>
                            <p>Featured in renowned exhibitions and publications globally, our portfolio showcases a
                                unique perspective that resonates around the world.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/dance2.png"
                                alt="dance2">
                            <h5>Creative Collaborations</h5>
                            <p>We've partnered with leading brands and artists, delivering captivating visuals that
                                stand out. Our collaborative approach ensures that each project is a success.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/frame.png"
                                alt="frame">
                            <h5>Unique Perspectives</h5>
                            <p>Specializing in capturing moments from unique angles, we deliver memorable services that
                                tell captivating stories. Our goal is to evoke connection.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/cam.png"
                                alt="cam">
                            <h5>Passion for Excellence</h5>
                            <p>Committed to delivering excellence in every photograph, we exceed expectations with our
                                dedication, attention to detail, and unwavering passion for our craft.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="upper-sec">
                <div class="images">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/testimonial1.webp"
                        class="img1" alt="testimonial1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/testimonial2.webp"
                        class="img2" alt="testimonial2">
                </div>
                <div class="title">
                    <span>Testimonials</span>
                    <h2>Hear What Our Clients Have to Say</h2>
                    <p>Delivering satisfactory work is important to us. We value our partnership with each client in
                        making timeless treasures for their special events.
                    </p>
                    <p>
                        Our clients’ heartfelt testimonials are our pride and joy. Each of their words is a testament to
                        the trust and confidence they have placed in us. As you read through their messages, we hope
                        you'll see why Nice Print Photo is the trusted choice for capturing unforgettable moments.
                    </p>
                </div>
            </div>
        </div>
        <div class="lower-sec">
            <div class="slider3 owl-carousel owl-theme">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $testimonialPost = array(
                    'paged' => $paged,
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );
                $testtimonial = new WP_Query($testimonialPost);
                if ($testtimonial->have_posts()):
                    while ($testtimonial->have_posts()):
                        $testtimonial->the_post();
                        $feautredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
                        ?>
                        <div class="item">
                            <div class="card">
                                <div class="avatar-con">
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="images">
                                            <?php
                                            // Get the URL of the featured image
                                            $featuredIMG = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                            ?>
                                            <img src="<?php echo esc_url($featuredIMG[0]); ?>"
                                                alt="<?php the_title_attribute(); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="name-con">
                                        <h6><?php the_title(); ?></h6>
                                        <div class="star-con">
                                            <?php
                                            // Assuming you've created a field with the name 'star_rating' for your post/page
                                            $star_rating = get_field('star_rating');
                                            // Assuming you've created a field with the name 'reviews_count' for your post/page
                                            $reviews_count = get_field('review_counts');
                                            $star_image_url = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/05/wholestar.png';
                                            // $star_half = 'https://best.org.ph/wp-content/uploads/2024/01/halfstar.png';
                                            $star_empty = 'https://blackdragon.tech/niceprint/wp-content/uploads/2024/05/hallowstar.png';
                                            // Display stars
                                            if ($star_rating !== null && $star_rating > 0) {
                                                $full_stars = floor($star_rating);
                                                $half_star = ($star_rating - $full_stars) >= 0.5;
                                                $empty_stars = 5 - $full_stars - ($half_star ? 1 : 0);
                                                // Full stars
                                                for ($i = 0; $i < $full_stars; $i++) {
                                                    echo '<img src="' . esc_url($star_image_url) . '" alt="Full Star">';
                                                }
                                                // Half star
                                                if ($half_star) {
                                                    echo '<img src="' . esc_url($star_half) . '" alt="Half Star">';
                                                }
                                                // Empty stars
                                                for ($i = 0; $i < $empty_stars; $i++) {
                                                    echo '<img src="' . esc_url($star_empty) . '" alt="Empty Star">';
                                                }
                                            } else {
                                                // Display grey stars if there's no star rating
                                                for ($i = 0; $i < 5; $i++) {
                                                    echo '<img src="' . esc_url($star_empty) . '" alt="Empty Star">';
                                                }
                                            }
                                            ?>
                                            <!-- <div class="count">
                                                    <p>(<?php echo $reviews_count ?? 0; ?>)
                                                    </p>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <h2>Sorry, no post have found.</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php include 'templated-section/blogs-section.php'; ?>

<?php include 'templated-section/contact-section.php'; ?>

<?php include 'templated-section/message-us.php'; ?>


<?php get_footer(); ?>


<!-- carousel -->
<script>
    $(document).ready(function () {
        $('.slider-one').owlCarousel({
            loop: false,
            rewind: true,
            margin: 10,
            animateOut: 'fadeOut',
            mouseDrag: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                1199: {
                    items: 1
                },
                1399: {
                    items: 1
                }
            }
        });

        $('.slider3').owlCarousel({
            loop: true,
            margin: 10,
            margin: 30,
            nav: false,
            stagePadding: 300,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0,
                },
                1199: {
                    items: 2,
                    stagePadding: 0,
                },
                1399: {
                    items: 2,
                }
            }
        });

    });


</script>
<!-- counting numbers -->
<script>

    const subOdometer = document.querySelector(".counter");

    const odometer = new Odometer({
        el: subOdometer,
        duration: 500
    });

    // Function to update the odometer value and manage intervals
    function updateOdometer(value) {
        odometer.update(value);
        setTimeout(() => {
            odometer.update(0);
            setTimeout(() => {
                updateOdometer(18); // Restart counting from 18
            }, 3000); // Stop for 3 seconds
        }, 5000); // Stop for 5 seconds
    }

    // Initial update to start the process
    updateOdometer(18);

</script>

<!-- video gallery -->
<script>
    // Get all thumbnail images and modals
    var thumbnails = document.querySelectorAll('.video-thumbnail');
    var modals = document.querySelectorAll('.video-modal');

    // Add click event listeners to thumbnails
    thumbnails.forEach(function (thumbnail, index) {
        thumbnail.addEventListener('click', function () {
            modals[index].style.display = "block";
            stopMainVideo();
        });
    });

    // Get all close buttons
    var closeButtons = document.querySelectorAll('.close');

    // Add click event listeners to close buttons
    closeButtons.forEach(function (closeButton) {
        closeButton.addEventListener('click', function () {
            var modal = closeButton.parentElement.parentElement;
            modal.style.display = "none";
            startMainVideo();
        });
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function (event) {
        modals.forEach(function (modal) {
            if (event.target == modal) {
                modal.style.display = "none";
                startMainVideo();
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Get necessary elements
        var thumbnail = document.querySelector('.video-thumbnail-main');
        var overlay = document.querySelector('.video-overlay-main');
        var iframe = document.querySelector('.video-iframe-main');

        // Add click event listener to thumbnail
        thumbnail.addEventListener('click', function () {
            // Hide thumbnail
            thumbnail.style.display = 'none';
            // Display video overlay
            overlay.style.display = 'block';
            // Play video
            iframe.src += "&autoplay=1";
        });

        // Function to stop main video
        window.stopMainVideo = function () {
            var iframeSrc = iframe.src;
            iframe.src = ''; // This stops the video
            iframe.src = iframeSrc.replace("&autoplay=1", ""); // Remove autoplay for later use
        };

        // Function to start main video
        window.startMainVideo = function () {
            iframe.src += "&autoplay=1"; // Add autoplay to start the video again
        };
    });

</script>