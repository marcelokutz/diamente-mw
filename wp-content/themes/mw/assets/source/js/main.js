$(document).ready(function(){

    var docW = $(document).width();

    $('.home .slider-info').length && $('.home .slider-info').slick({
        centerMode: false,
        arrows: false,
        dots: false,
        infinite: false,
        slidesToShow: 1,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                centerPadding: '40px',
                slidesToShow: 1
            }
            },{
            breakpoint: 980,
            settings: {
                centerPadding: '40px',
                slidesToShow: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });

    
    $('.page-template-template-qualita .slider-info').length && $('.page-template-template-qualita .slider-info').slick({
        centerMode: false,
        arrows: false,
        dots: false,
        infinite: false,
        slidesToShow: 3,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                centerPadding: '40px',
                slidesToShow: 3
            }
            },{
            breakpoint: 980,
            settings: {
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                centerPadding: '40px',
                slidesToShow: 3
            }
            }
        ]
    });

    $('.linee-slider').length && $('.linee-slider').slick({
        centerMode: false,
        arrows: true,
        dots: false,
        infinite: true,
        slidesToShow: 1,
    });

    $('.gallery').length && $('.gallery').slick({
        centerMode: true,
        arrows: true,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        centerPadding: '140px',     
        variableWidth: true,           
    });


    


/*
    if(docW < 767) {
        $('.list-insta').length && $('.list-insta').slick({
            centerMode: false,
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 3, 
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    centerMode: false,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
                }
            ]
        });
    }

    $(".scroll").on('click', function(e) {
        e.preventDefault();
        var gotodiv = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(gotodiv).offset().top
        }, 1000);
    }); */

    

});

