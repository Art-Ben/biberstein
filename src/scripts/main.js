let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

function isEmptyStr(str) {
  return (!str || 0 === str.length);
}

jQuery(document).ready(function () {
  $(window).scroll( function() {
    if( $(window).scrollTop() > $('.header').innerHeight() ) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }
  } );
});