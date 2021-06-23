require('./bootstrap');

$(function(){
    const menu = new MmenuLight(
        document.querySelector( ".menu__nav" ),
        "(max-width: 991px)"
    );

    const navigator = menu.navigation();
    const drawer = menu.offcanvas();

    $('.header__burger-button').click(function(){        
        drawer.open();
    });
});
