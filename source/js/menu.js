var burger = document.querySelector(".burger__button");
var navigation = document.querySelector(".header__nav");

var menutoggle = function () {
  navigation.classList.toggle("header__nav--show");
}

menutoggle();
burger.addEventListener('click', function () {
    menutoggle();
});
