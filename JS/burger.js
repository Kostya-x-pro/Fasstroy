window.addEventListener("DOMContentLoaded", function () {
  document.querySelector("#burger").addEventListener("click", function () {
    document.querySelector("#nav__list").classList.toggle("is-active");
    document.querySelectorAll(".header__contact").forEach(function (element) {
      element.classList.toggle("is-active");
    });
    document.querySelector("#burger").classList.toggle("burger-close");
  });

// при нажатии на любой из пунктов бургер меню автоматически закрывается
  document.querySelector("#nav__list").addEventListener("click", function() {
    document.querySelector("#nav__list").classList.toggle("is-active");
    document.querySelectorAll(".header__contact").forEach(function (element) {
      element.classList.toggle("is-active");
    });
    document.querySelector("#burger").classList.toggle("burger-close");
  });

});