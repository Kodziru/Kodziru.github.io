// burger

burgerBody = document.querySelector(".burger__body");
menuBody = document.querySelector(".navbar");

if (burgerBody) {
    burgerBody.addEventListener("click", function (e) {
        burgerBody.classList.toggle("_active");
        menuBody.classList.toggle("_active");
    });
}
