$(document).ready(function() {
    $(window).load(function animation() {

        $(".loading-overlay img").fadeIn(500, function() {
            $(this).fadeOut(1000, function() {
                animation();
            });
        });
        $(".loading-overlay img").fadeOut(1000, function() {
            $(".loading-overlay ").fadeOut(2000);
        });


    });
    $(".fixed-menu .settings-box").on('click', function() {
        $(this).parent('.fixed-menu').toggleClass('is-visible');
        if ($(this).parent('.fixed-menu').hasClass('is-visible')) {
            $(this).parent('.fixed-menu').animate({
                left: 0,
            }, 500);
            $('body').animate({
                paddingLeft: '15%',
            }, 500);
            $('.navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .dropdown').fadeOut(500);

        } else {
            $(this).parent('.fixed-menu').animate({
                left: "-15%",
            }, 500);
            $('body').animate({
                paddingLeft: 0,
            }, 500);
            
            $('.navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .dropdown').fadeIn(500);

            
          
        }
    });
    const colorLi = document.querySelectorAll(".colors-list li");
    colorLi.forEach(li => {

        li.addEventListener("click", (e) => {
            document.documentElement.style.setProperty('--main--color', e.target.dataset.color);
        });
    });

    var scroll = new SmoothScroll('a[href*="#"]');

    //INIT NICE SCROLL
    $("body").niceScroll({
        cursorcolor: "#f2f2f2",
        cursorwidth: "8px", // cursor width in pixel (you can also write "5px")
        cursorborder: "1px solid #fff", // css definition for cursor border
        cursorborderradius: "0px", // border radius in pixel for cursor
        zindex: "auto" | [9999999], // change z-index for scrollbar div
        scrollspeed: 100, // scrolling speed
        cursorminheight: 80,
        smoothscroll: true,
        background: "#222", // change css for rail background
    });

    $(function() {
        $('.skitter-large').skitter();
    });
    //OWL CAROUSEL
    $('.owl-carousel').owlCarousel({
        loop: true,
        rtl: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })




    // frutis slides attr change
    $('document').ready(function() {

        $('.new-pro .products .effect-1').hover(function() {
            $(this).attr("src", "images/new-products/2.jpg");
        }, function() {
            $(this).attr("src", "images/new-products/1.jpg");
        });
        $('.new-pro .products .effect-2').hover(function() {
            $(this).attr("src", "images/new-products/44.jpg");
        }, function() {
            $(this).attr("src", "images/new-products/3.jpg");
        });

        $('.new-pro .products .effect-3').hover(function() {
            $(this).attr("src", "images/new-products/66.jpg");
        }, function() {
            $(this).attr("src", "images/new-products/5.jpg");
        });

        $('.new-pro .products .effect-4').hover(function() {
            $(this).attr("src", "images/new-products/8.jpg");
        }, function() {
            $(this).attr("src", "images/new-products/7.jpg");
        });
        $('.new-pro .products .effect-5').hover(function() {
            $(this).attr("src", "images/home-applines/9.jpg");
        }, function() {
            $(this).attr("src", "images/home-applines/8.jpg");
        });

        $('.new-pro .products .effect-6').hover(function() {
            $(this).attr("src", "images/home-applines/13.jpg");
        }, function() {
            $(this).attr("src", "images/home-applines/12.jpg");
        });

        $('.new-pro .products .effect-7').hover(function() {
            $(this).attr("src", "images/home-applines/15.jpg");
        }, function() {
            $(this).attr("src", "images/home-applines/14.jpg");
        });

        $('.new-pro .products .effect-8').hover(function() {
            $(this).attr("src", "images/home-applines/17.jpg");
        }, function() {
            $(this).attr("src", "images/home-applines/16.jpg");
        });




        $('.card .img-1').hover(function() {
            $(this).attr("src", "images/aghzia/11.png");
        }, function() {
            $(this).attr("src", "images/aghzia/1.png");
        });

        $('.card .img-2').hover(function() {
            $(this).attr("src", "images/aghzia/12.png");
        }, function() {
            $(this).attr("src", "images/aghzia/2.png");
        });
        $('.card .img-3').hover(function() {
            $(this).attr("src", "images/aghzia/16.png");
        }, function() {
            $(this).attr("src", "images/aghzia/6.png");
        });
        $('.card .img-4').hover(function() {
            $(this).attr("src", "images/aghzia/14.png");
        }, function() {
            $(this).attr("src", "images/aghzia/4.png");
        });
        $('.card .img-5').hover(function() {
            $(this).attr("src", "images/aghzia/13.png");
        }, function() {
            $(this).attr("src", "images/aghzia/5.png");
        });
        $('.card .img-6').hover(function() {
            $(this).attr("src", "images/aghzia/15.png");
        }, function() {
            $(this).attr("src", "images/aghzia/6.png");
        });
        $('.card .img-7').hover(function() {
            $(this).attr("src", "images/aghzia/9.png");
        }, function() {
            $(this).attr("src", "images/aghzia/7.png");
        });
        $('.card .img-8').hover(function() {
            $(this).attr("src", "images/aghzia/10.png");
        }, function() {
            $(this).attr("src", "images/aghzia/8.png");
        });
        $('.card .img-9').hover(function() {
            $(this).attr("src", "images/aghzia/16.png");
        }, function() {
            $(this).attr("src", "images/aghzia/9.png");
        });

        // MOBILES 
        $('.acc-mob .card .img-1').hover(function() {
            $(this).attr("src", "images/accs-mobiles/2.jpg");
        }, function() {
            $(this).attr("src", "images/accs-mobiles/1.jpg");
        });

        $('.acc-mob .card .img-2').hover(function() {
            $(this).attr("src", "images/accs-mobiles/4.jpg");
        }, function() {
            $(this).attr("src", "images/accs-mobiles/3.jpg");
        });
        $('.acc-mob .card .img-3').hover(function() {
            $(this).attr("src", "images/accs-mobiles/6.jpg");
        }, function() {
            $(this).attr("src", "images/accs-mobiles/5.jpg ");
        });
        $('.acc-mob .card .img-4').hover(function() {
            $(this).attr("src", "images/accs-mobiles/8.jpg");
        }, function() {
            $(this).attr("src", "images/accs-mobiles/7.jpg");
        });


        // START add class star
        $('.fruits .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-7').click(function() {
                $(this).removeClass('far fa-star');
            },
            function() {
                $(this).addClass('fas fa-star ');
            });
        $('.fruits .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.fruits .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });


        $('.clothes .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-7').click(function() {
                $(this).removeClass('far fa-star');
            },
            function() {
                $(this).addClass('fas fa-star ');
            });
        $('.clothes .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.clothes .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });


        $('.home-applines .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-7').click(function() {
                $(this).removeClass('far fa-star');
            },
            function() {
                $(this).addClass('fas fa-star ');
            });
        $('.home-applines .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.home-applines .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });


        $('.health-tools .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-7').click(function() {
                $(this).removeClass('far fa-star');
            },
            function() {
                $(this).addClass('fas fa-star ');
            });
        $('.health-tools .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.health-tools .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });

        // START HOVER CARD 

        $('.acc-mob .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-7').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.acc-mob .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });



        $('.makeup .card .card-body .stars .star-1').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-2').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-3').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-4').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-5').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-6').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-7').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-8').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-9').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-10').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-11').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-12').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-13').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-14').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-15').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-16').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-17').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-18').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-19').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
        $('.makeup .card .card-body .stars .star-20').click(function() {
            $(this).removeClass('far fa-star ');
        }, function() {
            $(this).addClass('fas fa-star ');
        });
    });
    //scroll top
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 1000) {
            $(".scroll-top").fadeIn(1000);

        } else
            $(".scroll-top").fadeOut(1000);


    });

    $(".scroll-top").click(function() {

        $('html ,body').animate({
            scrollTop: 0
        }, 2000)
    });

    //sarch overlay
    $('.search-overlay ').click(function() {
        $(this).fadeOut(1000);
    });

    $('.search-icon').click(function() {
        $(".search-overlay").fadeIn(1000);
    });

    $('.search-overlay .inner-search form .form-control , .search-overlay .inner-search form .btn-warning').click(function(e) {
        e.stopPropagation();
    });




    $('.single-page .gallery .thumbinals img').on('click', function() {
        $(this).addClass('selected').siblings().removeClass('selected');
        $('.master-img img').hide().attr('src', $(this).attr('src')).fadeIn(500);
    });


    $('.filter .open-rev ').on('click', function() {
        $('.filter .desc').fadeOut(function() {
            $('.filter .rev').fadeIn();
        });
    });

    $('.filter .open-desc ').on('click', function() {
        $('.filter .rev').fadeOut(function() {
            $('.filter .desc').fadeIn();
        });
    });


    $('.checkout .checkout-details .close-1 ').on('click', function() {
        $('.checkout .details-1').fadeOut(500).remove();
    });
    $('.checkout .checkout-details .close-2 ').on('click', function() {
        $('.checkout .details-2').fadeOut(500).remove();
    });



    (function($) {
        "use strict";

        // manual carousel controls
        $('.next').click(function() {
            $('.carousel').carousel('next');
            return false;
        });
        $('.prev').click(function() {
            $('.carousel').carousel('prev');
            return false;
        });

    })(jQuery);

    $('.our-offer').each(function() {
        $(this).animate({
            left: 0
        }, 5000);
    });
    $('.live-chat img').each(function() {
        $(this).animate({
            right: 0
        }, 6000);


    });
    $('.live-chat .message-click ').click( function(){
        $('.chatbox').fadeIn();
    });
    $('.chatbox .header-box .tools .fa-times').click( function(){
        $('.chatbox').fadeOut();
    });
  
    var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
});