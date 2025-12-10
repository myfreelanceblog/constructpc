jQuery(document).ready(function($){
    var heroSwiper = new Swiper('.hero__swiper', {
		loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.hero__pagination',
            clickable: true,
        },
    })

    var whatSwiper = new Swiper('.what__swiper', {
		loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
			nextEl: '.what-next',
			prevEl: '.what-prev',
        },
    })

    var performanceSwiper = new Swiper('.performance__swiper', {
		loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
			nextEl: '.performance-next',
			prevEl: '.performance-prev',
        },
    })
    
    var galBigSwiper = new Swiper('.gal-big__swiper', {
		loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
    })

    var galSmallSwiper = new Swiper('.gal-small__swiper', {
		loop: false,
        slidesPerView: 3,
        spaceBetween: 15,
        breakpoints: {
            100: {
                spaceBetween: 5,
            },
            768: {
                spaceBetween: 15,
            },
        }
    })

    var $thumbItem = $('.gal-small__item');
    $thumbItem.first().addClass('active');

    galBigSwiper.on('slideChange', function () {
        var i = galBigSwiper.activeIndex;

        $thumbItem.removeClass('active').eq(i).addClass('active');
        galSmallSwiper.slideTo(i);

        $('.project-thumb__next').toggleClass('active', galBigSwiper.slides.length !== i + 1);
    });

    $thumbItem.on('click', function () {
        var i = $(this).closest('.swiper-slide').index();
        $thumbItem.removeClass('active');
        $(this).addClass('active');
        galBigSwiper.slideTo(i);
    });

    var revSwiper = new Swiper('.rev__swiper', {
		loop: false,
        slidesPerView: 4,
        spaceBetween: 28,
        navigation: {
			nextEl: '.rev-next',
			prevEl: '.rev-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 8,
                slidesPerView: 1,
                loop: true,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 28,
            },
        }
    })

    var prioritySwiper = new Swiper('.priority__swiper', {
		loop: false,
        slidesPerView: 4,
        spaceBetween: 28,
        navigation: {
			nextEl: '.priority-next',
			prevEl: '.priority-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 8,
                slidesPerView: 1,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 28,
            },
        }
    })

    var receivingSwiper = new Swiper('.receiving__swiper', {
		loop: false,
        slidesPerView: 3,
        spaceBetween: 80,
        navigation: {
			nextEl: '.receiving-next',
			prevEl: '.receiving-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 8,
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1068: {
                slidesPerView: 3,
                spaceBetween: 80,
            },
        }
    })
    
    var contactSwiper = new Swiper('.contact__swiper', {
		loop: false,
        slidesPerView: 4,
        spaceBetween: 60,
        navigation: {
			nextEl: '.contact-next',
			prevEl: '.contact-prev',
        },
        breakpoints: {
            100: {
                slidesPerView: 1,
                spaceBetween: 8,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 60,
            },
        }
    })

    var clientsSwiper = new Swiper('.clients__swiper', {
		loop: false,
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
			nextEl: '.clients-next',
			prevEl: '.clients-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 8,
                slidesPerView: 1,
                loop: true,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        }
    })

    var configSwiper = new Swiper('.config__swiper', {
		loop: false,
        slidesPerView: 'auto',
        spaceBetween: 40,
        navigation: {
			nextEl: '.config-next',
			prevEl: '.config-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 0,
                slidesPerView: 1,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1240: {
                slidesPerView: 'auto',
                spaceBetween: 40,
            },
        }
    })

    var garantSwiper = new Swiper('.garant__swiper', {
		loop: false,
        slidesPerView: 4,
        spaceBetween: 40,
        navigation: {
			nextEl: '.garant-next',
			prevEl: '.garant-prev',
        },
        breakpoints: {
            100: {
                spaceBetween: 0,
                slidesPerView: 1,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1068: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        }
    })

    var forCount = 0;
    $('.agree').each(function () {
        forCount++;
        var forItem = $(this).find('.agree__label').attr('for') + forCount;
        $(this).find('.agree__label').attr('for', forItem);;
        $(this).find('input').attr('id', forItem);;
    });
    $(document).on('change', '.agree__input input', function () {
		if ($(this).is(':checked')) {
			$(this).parents('.agree').addClass('active');
		}else{
			$(this).parents('.agree').removeClass('active');
		}
    });
    
    $(window).on('scroll', function () {
        let header = $('header');
        if ($(this).scrollTop() > 100) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
        }
    });

    $('.mob-m').click(function(){
		$('body').toggleClass('open-m');
		if($('body').hasClass('open-m')){
			$('footer').after('<div class="over-bg"></div>');
		}else{
			$('.over-bg').remove();
		}
	});

    $(document).on('click', '.cart-char__title', function(e){
        $(this).toggleClass('active');
        $(this).siblings('.cart-char__content').slideToggle();
    })

    $(document).on('click', '.over-bg', function(){
        $(this).remove();
        $('body').toggleClass('open-m');
    });

    $('.faq-item__title').on('click', function (e) {
        $('.faq-item.active').not($(this).parents('.faq-item')).removeClass('active');
        $('.faq-item__content').not($(this).siblings('.faq-item__content')).slideUp();

        var $currentItem = $(this).parents('.faq-item');
        $currentItem.toggleClass('active');
        $(this).siblings('.faq-item__content').slideToggle();
    });

    $('.config-item__top').on('click', function (e) {
        $('.config-item.active').not($(this).parents('.config-item')).removeClass('active');
        $('.config-item__bottom').not($(this).siblings('.config-item__bottom')).slideUp();

        var $currentItem = $(this).parents('.config-item');
        $currentItem.toggleClass('active');
        $(this).siblings('.config-item__bottom').slideToggle();
    });

    $(document).on('click', '.method-pay .consult-box__item', function (e) {
        $('.consult-box__item').removeClass('active');
        $(this).addClass('active');
    })

    function slideToCart() {
        const top = $('.cart').offset().top - $('header').outerHeight();
        $("html, body").animate({ scrollTop: top }, 600);
    }
    
    $(document).on('click', '.order-btn', function (e) {
        $('.cart').addClass('active');
        slideToCart()
    })
    
    $(document).on('click', '.order-back', function (e) {
        $('.cart').removeClass('active');
        slideToCart()
    })

    $(document).on('change', '.config-options__item input', function() {

        // текущий выбранный элемент поменял diff внутри своей категории (этот код у тебя уже есть)
        const $input = $(this);
        const $item  = $input.closest('.config-item');
        const newPrice = parseInt($input.data('price'));

        // меняем верхнее название
        const title = $input.closest('.config-options__item').find('.config-options__title span').text();
        $item.find('.config-item__value span').text(title);

        // меняем картинку
        const img = $input.data('img');
        if (img) {
            $item.find('.config-choice__img').removeClass('empty');
            $item.find('.config-choice__img img').attr('src', img);
        } else {
            $item.find('.config-choice__img').addClass('empty');
            $item.find('.config-choice__img img').attr('src', 'img/config-empty.png');
        }

        // пересчёт diff внутри категории
        $item.find('.config-options__item input').each(function() {
            const $opt = $(this);
            const optPrice = parseInt($opt.data('price'));
            const diff = optPrice - newPrice;

            const diffText =
                diff === 0 ? '0' :
                diff > 0 ? `+${diff}` :
                `${diff}`;

            $opt.closest('.config-options__item')
                .find('.config-options__difference span')
                .text(diffText);
        });

        // активная опция
        $item.find('.config-options__item').removeClass('active');
        $input.closest('.config-options__item').addClass('active');

        // ================================================
        //     ПЕРЕСЧЁТ ОБЩЕЙ СТОИМОСТИ (ВЕСЬ ПК)
        // ================================================
        let total = 0;

        $('.config-options__item input:checked').each(function() {
            total += parseInt($(this).data('price'));
        });

        // обновляем итоговую цену
        $('.card-price__numb span').text(
            total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
        );

    });



})

function equalizeHeights() {
    let items = Array.from(document.querySelectorAll('.consult-box__item'))
        .filter(i => !i.closest('.method-pay'));

    let max = 0;

    items.forEach(i => {
        i.style.height = 'auto';
        max = Math.max(max, i.offsetHeight);
    });

    items.forEach(i => {
        i.style.height = max + 'px';
    });
}

window.addEventListener('load', equalizeHeights);
window.addEventListener('resize', equalizeHeights);

document.addEventListener('DOMContentLoaded', function () {
    var revSlider = document.querySelectorAll('.universal-slider');
    if (revSlider.length > 0) {
        revSlider.forEach(function (slider) {
            var swiperContainer = slider.querySelector('.rev-swiper');
            var prev = slider.querySelector('.nav-prev');
            var next = slider.querySelector('.nav-next');
            var startEl = slider.querySelector('.nav__start');
            var endEl = slider.querySelector('.nav__end');
            var nav = slider.querySelector('.nav');
            var pagination = slider.querySelector('.rev-pagination');
        
            var swiper = new Swiper(swiperContainer, {
                loop: false,
                slidesPerView: 3,
                spaceBetween: 20,
                navigation: {
                    prevEl: prev,
                    nextEl: next,
                },
                pagination: {
                    el: pagination,
                    clickable: true,
                },
                breakpoints: {
                    100: {
                        spaceBetween: 16,
                        slidesPerView: 'auto',
                    },
                    568: {
                        spaceBetween: 20,
                        slidesPerView: 'auto',
                    },
                    1256: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                }
            });

            endEl.innerHTML = swiper.snapGrid.length;

            if (swiper.snapGrid.length < 2) {
                nav.classList.add('hide');
            } else {
                nav.classList.remove('hide');
            }

            swiper.on('slideChange', function (e) {
                var activeSlideIndex = swiper.activeIndex;
        
                var startN = activeSlideIndex + 1;
                startEl.innerHTML = startN;

                endEl.innerHTML = swiper.snapGrid.length;
            });
        });
    }
});

if ('IntersectionObserver' in window) {
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('anim-active');
            } else {
                entry.target.classList.remove('anim-active');
            }
        });
    };
    const observerOptions = {
        root: null,
        rootMargin: '50px',
        threshold: 0
    };
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    document.querySelectorAll('.anim-items').forEach(item => {
        observer.observe(item);
    });
} else {
    document.querySelectorAll('.anim-items').forEach(item => {
        item.classList.add('anim-active');
    });
}