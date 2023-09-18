/* querySelector const */
const qs = (val) => {
    return document.querySelector(val);
}

/* owl carousel */
/* $(".inicio-carousel").on("initialized.owl.carousel", () => {
    setTimeout(() => {
        $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
        $("section").show();
    }, 200);
});

const $inicioCarousel = $(".inicio-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: [
        '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
        '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' // icons from https://iconmonstr.com
    ]
});

$inicioCarousel.on("changed.owl.carousel", e => {
    $(".owl-slide-animated").removeClass("is-transitioned");
    const $currentOwlItem = $(".owl-item").eq(e.item.index);
    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
    const $target = $currentOwlItem.find(".owl-slide-text");
    doDotsCalculations($target);
});

$inicioCarousel.on("resize.owl.carousel", () => {
    setTimeout(() => {
    setOwlDotsPosition();
    }, 50);
});

setOwlDotsPosition();

function setOwlDotsPosition() {
    const $target = $(".owl-item.active .owl-slide-text");
    doDotsCalculations($target);
}

function doDotsCalculations(el) {
    const height = el.height();
    const {top, left} = el.position();
    const res = height + top + 20;

    $(".inicio-carousel .owl-dots").css({
        top: `${res}px`,
        left: `${left}px`
    });
} */

$('.lab-carousel').owlCarousel({
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
            stagePadding: 10
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