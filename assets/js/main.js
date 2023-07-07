var toggleButton = document.querySelector('.toggle');
var navMenu = document.querySelector('.nav');

toggleButton.addEventListener('click', function () {
    if (navMenu.style.display === 'block') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'block';
    }
});

window.addEventListener('resize', function () {
    if (window.innerWidth > 780) {
        navMenu.style.display = 'block';
    } else {
        navMenu.style.display = 'none';
    }
});
