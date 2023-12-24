const menu = document.querySelector('.hamb');
const menuBt = document.querySelector('.menu-bt');

menuBt.addEventListener('click', function () {
    if (menu.style.visibility == 'visible')
        menu.style.visibility = 'collapse';

    else
        menu.style.visibility = 'visible';

});