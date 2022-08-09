$(document).ready(function()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var rtl = $('meta[name="is_rtl"]').attr('content') == 'true' ? true : false;

    $(document).ready(function() {
        $('.slick-carousel-home').slick({
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            rtl:rtl,
            autoplay: false,
            dots: true

        });

        $('.comp-main').slick({
            arrows: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            rtl:rtl,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.slick-carousel').slick({
            arrows: true,
            slidesToShow: 3,
            rtl:rtl,
            slidesToScroll: 1,
            autoplay: false,responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.center').slick({
            centerMode: true,
            slidesToShow: 5,
            dots: false,
            arrows: true,
            swipe: true,
            centerPadding: '60px',
            swipeToSlide: true,

            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.counter').countUp();

        // Show the first tab and hide the rest
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav li').click(function(){
            $('#tabs-nav li').removeClass('active');
            $(this).addClass('active');
            $('.tab-content').hide();

            var activeTab = $(this).find('a').attr('href');
            $(activeTab).fadeIn();
            return false;
        });

        // Click function
        $('.menu-btn').click(function () {
            $(this).toggleClass('active');
            $(".menu-main").toggleClass('active');

        });

        $( ".donate-type-item" ).click(function() {
            $(".donate-type-item").removeClass('active-donate-type');
            $(this).addClass('active-donate-type');
        });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows:true,
            vertical:true,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            verticalSwiping:true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        // vertical: false,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        vertical: false,
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        vertical: false,
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 380,
                    settings: {
                        vertical: false,
                        slidesToShow: 4,
                    }
                }
            ]
        });

        $(".chosen-select").chosen({rtl: rtl});

        $( "#datepicker" ).datepicker({
            changeYear: true,
            changeMonth: true,
            yearRange: "1910:2099"
        });

        $(".days-main ul li").click(function () {
            $(this).toggleClass('active-option');
        });
    });
});
