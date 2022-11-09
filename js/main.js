// burger

burgerBody = document.querySelector(".burger__body");
navbar = document.querySelector(".navbar");
mainBg = document.querySelector(".main");

if (burgerBody) {
    burgerBody.addEventListener("click", function (e) {
        burgerBody.classList.toggle("_active");
        navbar.classList.toggle("_active");
        mainBg.classList.toggle("_active__main");
    });
}

//Cache

const perValues = [];
