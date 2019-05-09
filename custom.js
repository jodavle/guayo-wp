/*
function toggleClassMenu() {
    myMenu.classList.add("menu--animatable");
    if(!myMenu.classList.contains("menu--visible")) {
        myMenu.classList.add("menu--visible");
    } else {
        myMenu.classList.remove('menu--visible');
    }
}

function OnTransitionEnd() {
    myMenu.classList.remove("menu--animatable");
}

var myMenu = document.querySelector(".menu");
var oppMenu = document.querySelector(".menu-sandwich");
myMenu.addEventListener("transitionend", OnTransitionEnd, false);
oppMenu.addEventListener("click", toggleClassMenu, false);
myMenu.addEventListener("click", toggleClassMenu, false);
*/
anime({
	targets: '.circle-data',
	rotate: '1turn',
	loop: true,
	easing: 'linear',
	duration: 10000,
})
