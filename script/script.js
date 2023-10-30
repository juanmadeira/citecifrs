/* querySelector const */
const qs = (val) => {
    return document.querySelector(val);
}

/* owlCarousel */
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

/* validação do formulário
let camposCadastro = ["name", "email", "equip"];
function validateFormCadastro(){
    for (let i = 0; i < camposCadastro.length; i++) {
        let text = document.forms["form"][`${camposCadastro[i]}`].value;
        if (text !== ""){
            qs(`#fillmessage-${camposCadastro[i]}`).style.display = "none";
            qs(`#${camposCadastro[i]}`).style.border = "none";
        }
        else if (text == "") {
            qs(`#fillmessage-${camposCadastro[i]}`).style.display = "flex";
            qs(`#${camposCadastro[i]}`).style.border = "1px solid red";
            document.forms["form"][`${camposCadastro[i]}`].focus();
        }
    }
}

let camposContato = ["email", "subject", "message"];
function validateFormContato(){
    for (let i = 0; i < camposContato.length; i++) {
        let text = document.forms["form"][`${camposContato[i]}`].value;
        if (text !== ""){
            qs(`#fillmessage-${camposContato[i]}`).style.display = "none";
            qs(`#${camposContato[i]}`).style.border = "none";
        }
        else if (text == "") {
            qs(`#fillmessage-${camposContato[i]}`).style.display = "flex";
            qs(`#${camposContato[i]}`).style.border = "1px solid red";
            document.forms["form"][`${camposContato[i]}`].focus();
        }
    }
}*/