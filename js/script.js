$(document).ready(function() {
    const $burgerMenu = $('.burger-menu');
    const $mobileMenu = $('.mobile-menu');
    const $body = $('body');

    // Открытие/закрытие меню при клике на бургер
    $burgerMenu.on('click', function(e) {
        e.stopPropagation();
        $(this).toggleClass('active');
        $mobileMenu.toggleClass('active');
        $body.toggleClass('menu-open');
    });

    // Закрытие меню при клике на ссылку
    $('.mobile-menu .nav-link').on('click', function() {
        $burgerMenu.removeClass('active');
        $mobileMenu.removeClass('active');
        $body.removeClass('menu-open');
    });

    // Закрытие меню при клике вне его
    $(document).on('click', function(e) {
        if (!$mobileMenu.is(e.target) && 
            !$burgerMenu.is(e.target) && 
            $mobileMenu.has(e.target).length === 0 && 
            $burgerMenu.has(e.target).length === 0) {
            $burgerMenu.removeClass('active');
            $mobileMenu.removeClass('active');
            $body.removeClass('menu-open');
        }
    });

    // Предотвращение закрытия при клике внутри меню
    $mobileMenu.on('click', function(e) {
        e.stopPropagation();
    });
});


var swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 1    ,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    }
});




document.querySelectorAll('.content-description').forEach(description => {
    const text = description.textContent;
    if(text.length > 196) {
        description.innerHTML = text.slice(0, 196) + '...' + ' <a href="#" class="more">More</a>';
    }
});

