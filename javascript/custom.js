// BulmaJS
document.addEventListener('DOMContentLoaded', function() {
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
    // Add a click event on each of them
        $navbarBurgers.forEach(function(el) {
            el.addEventListener('click', function() {
    // Get the target from the "data-target" attribute
                var target = el.dataset.target;
                var $target = document.getElementById(target);
    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"

        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
            });
        });
    }
});

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

anime({
	targets: '.nuevolanzamiento',
	rotate: '1turn',
	loop: true,
	easing: 'linear',
	duration: 10000,
})
*/
anime({
    targets: '.bootScreenAnimation .ele .triangle',
    easing: 'linear',
    width: ['0px','180px'],
    delay: 1000,
    duration: 1000
})
anime({
    targets: '.bootScreenAnimation',
    easing: 'linear',
    opacity: ['1','0'],
    delay: 2000,
    duration: 1000,
    complete: function(anim) {
        document.getElementsByClassName("bootScreenAnimation")[0].style.display = "none";
    }
})

