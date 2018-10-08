var search = document.querySelector(".search__button");
var input = document.querySelector(".search__input");
var close = document.querySelector(".search__button-close");


var searchtoggle = function () {
  input.classList.toggle("search__input--show");
  search.classList.toggle("search__button--show");
  close.classList.toggle("search__button-close--show");
}

searchtoggle();

search.addEventListener('click', function () {
  searchtoggle();
  input.focus();
});

close.addEventListener('click', function () {
  searchtoggle();
});
