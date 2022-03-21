
var prevScrollpos = window.pageYOffset;
const tabletBreakpoint = 1025;
const homeBreakpoint = 1465;


window.onscroll = () => {
    var screenWidth = window.innerWidth;
    var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && screenWidth > tabletBreakpoint) {
    document.querySelector('.header').classList.remove('header-toggle');
  } else {
    document.querySelector('.header').classList.add('header-toggle');
  }
  prevScrollpos = currentScrollPos;

  if(screenWidth < tabletBreakpoint) {
    document.querySelector('.header').classList.remove('header-toggle');
  }
  if(currentScrollPos < 25) {
    document.querySelector('.header').classList.remove('header-toggle');
  }
}

window.addEventListener('DOMContentLoaded', () => {

  document.querySelector('.hamburger').addEventListener('click', () => {
    document.querySelector('.hamburger').classList.toggle('hamburger-menu-active');
    document.querySelector('.mobile-navigation').classList.toggle('mobile-nav-active');
    document.querySelector('.mobile-navigation-contact').classList.toggle('mobile-nav-contact-active');
    document.body.classList.toggle('menu-active');
  });

});