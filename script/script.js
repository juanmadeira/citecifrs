/* querySelector const */
const qs = (val) => {
    return document.querySelector(val);
}

/* carousel */
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 50,
    dots: true,
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