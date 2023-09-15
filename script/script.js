/* querySelector const */
const qs = (val) => {
    return document.querySelector(val);
}

/* owl carousel */
$('.inicio-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots:false,
    items:1,
    lazyLoad: true,
    loop:true,
    margin:10,
    nav:false,
    stagePadding: 200,
    responsiveClass: true,
    responsive:{
        0:{
            items:1,
            stagePadding: 60
        },
        600:{
            items:1,
            stagePadding: 100
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:1,
            stagePadding: 400
        }
    }
});

$('.equip-carousel').owlCarousel({
    dots: true,
    loop: true,
    margin: 50,
    nav: false,
    responsiveClass: true,
    responsive: {
    0: {
        items: 1,
        margin: 10,
        stagePadding: 20,
    },
    768: {
        items: 3,
        margin: 20,
        stagePadding: 10,
    },
    1000: {
        items: 4
    }
    }
});