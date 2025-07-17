<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/homepage.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/global.css">



<section class="contact-us global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <?php if (is_page(598)): ?>

                <style>
                    section.contact-us.global-padding {
                        background: #353235;
                    }

                    .text {
                        text-align: center;
                        width: 100%;
                        max-width: 946px;
                        margin: 0 auto;
                        margin-bottom: 100px;
                    }

                    .text p:nth-of-type(1){
                        margin-bottom: 15px;
                    }

                    .text h1 {
                        margin-bottom: 15px;
                    }

                    .text span {
                        margin-bottom: 12px;
                    }

                    .get-in-touch h2 {
                        margin-bottom: 15px;
                    }

                    @media(max-width: 1199px) {
                        .text {
                            margin-bottom: 50px;
                        }
                    }

                    @media(max-width: 767px) {
                        .text {
                            margin-bottom: 30px;
                        }
                    }
                </style>

                <div class="text">
                    <span>Contact Us</span>
                    <h1>Write In To Us For Immediate Response!</h1>
                    <p>Have a burning question? Need a quick quote? Our dedicated team is eager to connect! Reach out using
                        the form below or shoot us an email at <a href="mailto: inquiry@niceprintphoto.com">inquiry@niceprintphoto.com</a>. We prioritize swift and
                        personalized responses, ensuring you get the information you need, fast.
                    </p>

                    <p>
                    Your satisfaction is our masterpiece. Let's turn your ideas into reality.
                    </p>
                </div>

            <?php endif; ?>
            <div class="content">
                <div class="images">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/contactimg1.jpg"
                        class="img1" alt="contactimg1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/contactimg2.jpg"
                        class="img2" alt="contactimg2">
                </div>
                <div class="contact-del">
                    <div class="title">
                        <span>Contact Us</span>
                        <h2>Get in Touch with Us</h2>
                        <p>The journey of treasuring your life’s finest moments starts with the first connection. Drop
                            us a line and let’s begin how we can make the best out of your event!
                        </p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="8093d96" title="Homepage Contact form"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>