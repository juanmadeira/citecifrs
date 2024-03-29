// carrossel da página principal
$('.inicio-carousel').owlCarousel({
    animateOut:'animate__slideOutUp',
    autoplayTimeout:6000,
    autoplay:true,
    dots:false,
    loop:true,
    margin:0,
    mouseDrag:false,
    nav:true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// carrossel com as imagens do laboratório
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
            stagePadding: 0
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
            stagePadding: 300
        },
        1800:{
            items:1,
            stagePadding: 300
        }
    }
});

// carrossel com os equipamentos
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

// imagem estática na página de projetos
$('.projetos-carousel').owlCarousel({
    animateOut:'animate__slideOutUp',
    autoplayTimeout:6000,
    autoplay:true,
    dots:false,
    loop:true,
    margin:0,
    mouseDrag:false,
    nav:true,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});