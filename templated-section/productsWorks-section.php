<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/homepage.css">


<style>
    #spider_popup_left-ico,
    #spider_popup_right-ico {
        background-color: unset !important;
        cursor: pointer;
        top: 50%;
        width: auto;
        padding: 0px !important;
        color: white;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 5px !important;
        width: 36px !important;
        height: 36px !important;
        border: 1px solid #BD837C !important;
    }

    #spider_popup_left-ico:hover,
    #spider_popup_right-ico:hover {
        background-color: #B34457 !important;
        border: 1px solid transparent !important;

    }

    #spider_popup_left-ico:hover span,
    #spider_popup_right-ico:hover span {
        color: #ffff !important;
    }

    #spider_popup_left-ico span,
    #spider_popup_right-ico span {
        color: #BD837C !important;
        letter-spacing: unset !important;
        line-height: unset !important;
    }

    .spider_popup_close {
        background-color: unset !important;
    }

    span.bwg_nav_cont_5,
    span.bwg_nav_cont_4,
    span.bwg_nav_cont_3,
    span.bwg_nav_cont_2,
    span.bwg_nav_cont_1 {
        display: none;
    }

    @media(max-width: 991px) {
        img.bwg_popup_image.bwg_popup_watermark {
            max-height: 400px !important;
        }
    }

    @media(max-width: 767px) {
        img.bwg_popup_image.bwg_popup_watermark {
            max-height: 250px !important;
        }
    }
</style>


<section class="product-works global-padding">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="title">
                <span>View Our Proudest Works</span>
                <h2>Works That Truly Reflect Our Craftsmanship</h2>
                <p>Step into the world of our best photo and videos yet. Reflecting on our artistry and expertise, here
                    are some moments we believe we’ve captured its truest essence.
                </p>
            </div>
            <div class="products-con">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Weddings-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Weddings" type="button" role="tab" aria-controls="pills-Weddings"
                            aria-selected="false">Weddings</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-International-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-International" type="button" role="tab"
                            aria-controls="pills-International" aria-selected="false">International</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-prenup-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-prenup" type="button" role="tab" aria-controls="pills-prenup"
                            aria-selected="false">Prenup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-birthday-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-birthday" type="button" role="tab" aria-controls="pills-birthday"
                            aria-selected="false">Birthday</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-kiddie-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-kiddie" type="button" role="tab" aria-controls="pills-kiddie"
                            aria-selected="false">Kiddie</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="products-works">
                            <div class="photo-products">
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all1.jpg"
                                        alt="all1">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all2.jpg"
                                        alt="all2">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all3.jpg"
                                        alt="all3">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all4.jpg"
                                        alt="all4">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all5.jpg"
                                        alt="all5">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all6.jpg"
                                        alt="all6">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all7.jpg"
                                        alt="all7">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all8.jpg"
                                        alt="all8">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all9.jpg"
                                        alt="all9">
                                </div>
                                <div class="image product">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all10.jpg"
                                        alt="all10">
                                </div>
                            </div>
                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/wedding/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Weddings" role="tabpanel" aria-labelledby="pills-Weddings-tab">
                        <div class="photo-products2">
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all10.jpg"
                                    alt="Photo1">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed2.jpg"
                                    alt="photo2">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed3.jpg"
                                    alt="photo3">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed4.jpg"
                                    alt="photo4">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed5.jpg"
                                    alt="photo5">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed6.jpg"
                                    alt="photo6">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed7.jpg"
                                    alt="photo10">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed8.jpg"
                                    alt="photo7">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed9.jpg"
                                    alt="photo8">
                            </div>
                            <div class="product2 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/wed10.jpg"
                                    alt="photo9">
                            </div>

                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/wedding/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-International" role="tabpanel"
                        aria-labelledby="pills-International-tab">
                        <div class="photo-products3">
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int1.jpg"
                                    alt="Photo3">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int2.jpg"
                                    alt="photo2">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int3.jpg"
                                    alt="photo3">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all9.jpg"
                                    alt="photo4">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all2.jpg"
                                    alt="photo5">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int6.jpg"
                                    alt="photo6">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int7.jpg"
                                    alt="photo10">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int8.jpg"
                                    alt="photo7">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all3.jpg"
                                    alt="photo8">
                            </div>
                            <div class="product3 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/int10.jpg"
                                    alt="photo9">
                            </div>

                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/international/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-prenup" role="tabpanel" aria-labelledby="pills-prenup-tab">
                        <div class="photo-products4">
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all8.jpg"
                                    alt="Photo3">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all5.jpg"
                                    alt="photo2">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup3.jpg"
                                    alt="photo3">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup4.jpg"
                                    alt="photo4">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup5.jpg"
                                    alt="photo5">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup6.jpg"
                                    alt="photo6">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup7.jpg"
                                    alt="photo10">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all6.jpg"
                                    alt="photo7">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup8.jpg"
                                    alt="photo8">
                            </div>
                            <div class="product4 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/prenup10.jpg"
                                    alt="photo9">
                            </div>
                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/prenup/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-birthday" role="tabpanel" aria-labelledby="pills-birthday-tab">
                        <div class="photo-products5">
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd1.jpg"
                                    alt="Photo3">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd2.jpg"
                                    alt="photo2">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd3.jpg"
                                    alt="photo3">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd4.jpg"
                                    alt="photo4">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd5.jpg"
                                    alt="photo5">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd6.jpg"
                                    alt="photo6">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd7.jpg"
                                    alt="photo10">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd8.jpg"
                                    alt="photo7">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/bd9.jpg"
                                    alt="photo8">
                            </div>
                            <div class="product5 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all1.jpg"
                                    alt="photo9">
                            </div>
                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/birthday/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-kiddie" role="tabpanel" aria-labelledby="pills-kiddie-tab">
                        <div class="photo-products6">
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid1.jpg"
                                    alt="Photo3">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/all7.jpg"
                                    alt="photo2">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid3.jpg"
                                    alt="photo3">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid4.jpg"
                                    alt="photo4">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid5.jpg"
                                    alt="photo5">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid6.jpg"
                                    alt="photo6">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid7.jpg"
                                    alt="photo10">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid9.jpg"
                                    alt="photo7">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid8.jpg"
                                    alt="photo8">
                            </div>
                            <div class="product6 image product">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/homepage/kid10.jpg"
                                    alt="photo9">
                            </div>
                        </div>
                        <div class="btn-btn">
                            <a href="<?php echo get_home_url(); ?>/kiddie/" target="_blank" class="a-color ">View
                                More</a>
                        </div>
                    </div>
                </div>
                <div id="product-image-modal" class="modal">
                    <span class="product-close">&times;</span>
                    <img class="modal-content" id="modalImage">
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                    <a class="works-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12" fill="none">
                            <path d="M7.625 1.00024L1.375 6.00024L7.625 11.0002" stroke="#BD837C" stroke-width="1.875"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <a class="works-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="13" viewBox="0 0 10 13" fill="none">
                            <path d="M1.875 11.6729L8.125 6.67291L1.875 1.67291" stroke="#BD837C" stroke-width="1.875"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>