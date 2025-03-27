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


const swiper = new Swiper('.bonus-swiper', {
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

const swiperGallery = new Swiper('.gallery-swiper', {
    slidesPerView: 5,
    spaceBetween: 60,
    initialSlide: 2,
    centeredSlides: true,   
});

// Добавляем обработчик клика на каждый слайд
const slides = document.querySelectorAll('.gallery-swiper .swiper-slide');
slides.forEach((slide, index) => {
    slide.addEventListener('click', () => {
        swiperGallery.slideTo(index); // Перемещаемся к слайду по индексу
    });
});

document.querySelectorAll('.content-description').forEach(description => {
    const text = description.textContent;
    if(text.length > 196) {
        description.innerHTML = text.slice(0, 196) + '...' + ' <a href="#" class="more">More</a>';
    }
});

