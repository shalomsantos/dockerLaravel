const modal = document.getElementById('modal');

function modalClose(){
  modal.classList.toggle("d-none");
}

if(document.getElementById('carousel') !== null){
  const activeItemCarousel = document.getElementById('carousel').firstElementChild;
  const activeCarouselIndicators = document.getElementById("carousel-indicators").firstElementChild;
  activeItemCarousel.classList.add('active');
  activeCarouselIndicators.classList.add('active');
}

var swiper = new Swiper('.swiper', {
  slidesPerView: 5,
  direction: getDirection(),
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  on: {
    resize: function () {
    swiper.changeDirection(getDirection());
    },
  },
});

function getDirection() {
  var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';
  return direction;
}
