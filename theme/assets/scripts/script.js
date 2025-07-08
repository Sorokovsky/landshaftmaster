$(document).ready(function(){
    $('.burger').on('click', function() {
       $('.mobile_menu').toggleClass('mobile_menu-active')
       $('body').toggleClass('lock');
       $('.burger').toggleClass('burger-active');
       $('.burger-body').toggleClass('burger-body-active');
    });
    $('.mobile_link').on('click', function() {
       $('.mobile_menu').removeClass('mobile_menu-active');
       $('body').removeClass('lock');
       $('.burger').removeClass('burger-active');
       $('.burger-body').removeClass('burger-body-active');
    });
    
});
const gallery = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoHeight: true,
  pagination: {
    clickable: true,
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
const prepare = new Swiper('.prepare-container', {
  direction: 'horizontal',
  loop: true,
  autoHeight: true,
  navigation: {
    nextEl: '.prepare-button-next',
    prevEl: '.prepare-button-prev',
  },
});