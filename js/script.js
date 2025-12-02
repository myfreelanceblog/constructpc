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
                slidesPerView: 'auto',
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
})

function equalizeHeights() {
    let items = document.querySelectorAll('.consult-box__item');
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