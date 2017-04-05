import SendFunc from './sendForm.js';
import FloatMenu from './floatMenu.js';
import initFeed from './modal_feed'

$('.anchor').on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop:  $('a[name="'+this.hash.slice(1)+'"]').offset().top - 80
  }, 1000 );


  let navigation = document.querySelector('#menu nav');

  if (navigation.classList.contains('open')) {
    navigation.classList.remove('open');
  }
});

$('.flexslider').flexslider({
  animation: 'slide',
  controlsContainer: '.flexslider',
  animationLoop: false
});

//Плавающее меню
new FloatMenu().init({
    elem : document.getElementById('menu'),
    height : 200,
    first_class : 'menu_fixed_on_top',
    second_class : 'float_menu'
  });

// Отправка формы обратной связи скрипту для отправления по почте
let data = {
  name : 'input[name="name"]',
  email : 'input[name="email"]',
  telephone : 'input[name="telephone"]'
};


$(".fancybox").click(function() {
  $(".fancybox").fancybox({
    maxWidth: 800,
    maxHeight: 600,
    fitToView: false,
    width: document.documentElement.clientWidth > 700 ? '80%' : '90%',
    height: document.documentElement.clientWidth > 700 ? '40%' : '50%',
    autoSize: false,
    closeClick: false,
    openEffect: 'fade',
    closeEffect: 'fade',
  });
});

document.querySelector('#menu .burger')
  .addEventListener('click', e => {
    let navigation = document.querySelector('#menu nav');

    if (navigation.classList.contains('open')) {
      navigation.classList.remove('open');
    } else {
      navigation.classList.add('open');
    }
  });

initFeed();
