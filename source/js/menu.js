var burger = document.querySelector(".burger__button");
var nav = document.querySelector(".header__nav");
var sitelist = document.querySelector(".site-list");
var wrapper = document.querySelector(".page-header-wrapper");
var menu = document.querySelector(".site-list-actions__menu");


var menutoggle = function() {
  nav.classList.toggle("header__nav--show");
};

menutoggle();
burger.addEventListener('click', function () {
  menutoggle();
  nac.classList.toggle("header__nav--show");
});
