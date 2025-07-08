let activeClass = "active";
let burgerClass = "burger";
let wordpressSelector = "#wpadminbar";
let headerSelector = "header";
let mobileSelector = ".mobile";

document.addEventListener("DOMContentLoaded", () => {
    let burger = document.querySelector(`.${burgerClass}`);
    burger.addEventListener("click", toggleMenu);
    normalizeMobileByTop();
    window.addEventListener("resize", normalizeMobileByTop);
});


function toggleMenu(event) {
    let {target} = event;
    let mobile = document.querySelector(mobileSelector);
    target = target.closest(`.${burgerClass}`);
    if (target.classList.contains(activeClass)) {
        target.classList.remove(activeClass);
        mobile.classList.remove(activeClass);
        document.body.classList.remove(".lock");
    } else {
        target.classList.add(activeClass);
        mobile.classList.add(activeClass);
        document.body.classList.add(".lock");
    }
}

function normalizeMobileByTop() {
    let wordpressBarHeight = 0;
    let headerHeight = 0;
    let wordpressBar = document.querySelector(wordpressSelector);
    let mobileBlock = document.querySelector(mobileSelector);
    let header = document.querySelector(headerSelector);
    if(wordpressBar !== null && wordpressBar !== undefined) {
        wordpressBarHeight = wordpressBar.offsetHeight;
    }
    if(header !== null && header !== undefined) {
        headerHeight = header.offsetHeight;
    }
    if(mobileBlock !== null && mobileBlock !== undefined) {
        let needOffset = wordpressBarHeight + headerHeight;
        mobileBlock.style.height = `calc(100vh - ${needOffset}px)`;
        mobileBlock.style.top = `${needOffset}px`;
    }
}