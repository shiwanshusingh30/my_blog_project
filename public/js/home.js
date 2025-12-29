
    const navLinks = document.getElementById('navLinks');

    function toggleMenu() {
        navLinks.classList.toggle('active');
        }
// slick js

    $('.slider').slick({
        slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
    {
        breakpoint: 768,
    settings: {
        arrows: false,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 2
                    }
                },
    {
        breakpoint: 600,
    settings: {
        arrows: false,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1
                    }
                }
    ]


        });

