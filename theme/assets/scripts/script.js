let activeClass = "active";
let burgerClass = "burger";
document.addEventListener("DOMContentLoaded", () => {
    let burger = document.querySelector(`.${burgerClass}`);
    burger.addEventListener("click", toggleMenu);
});

function toggleMenu(event) {
    let {target} = event;
    target = target.closest(`.${burgerClass}`);
    if (target.classList.contains(activeClass)) {
        target.classList.remove(activeClass);
    } else {
        target.classList.add(activeClass);
    }
}