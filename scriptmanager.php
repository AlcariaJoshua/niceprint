<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
</script>

<script>
    $(document).ready(function () {
        $('#logo-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            dots: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 30,
                },
                420: {
                    items: 3,
                    margin: 40,
                },
                1080: {
                    items: 4,
                    margin: 40,
                },
                1399: {
                    items: 6,
                    margin: 67,
                }
            },
        });

        $('.slider-two').owlCarousel({
            loop: true,
            margin: 30,
            stagePadding: 300,
            nav: false,
            dots: false,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0
                },
                767: {
                    items: 2,
                    stagePadding: 0
                },
                1399: {
                    items: 3
                }
            },
        });


    });



    $('#navigation1 .prev').click(function () {

        $('.slider-two').trigger('prev.owl.carousel');

    });



    $('#navigation1 .next').click(function () {

        $('.slider-two').trigger('next.owl.carousel');

    });
</script>