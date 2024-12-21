/*Adicionar Loading no carregamento de telas*/
jQuery(document).ready(function () {
    jQuery('#loading').show()
    jQuery(window).load(function () {
        // Quando a página estiver totalmente carregada, remove o id
        jQuery('#loading').fadeOut('slow')
    })
});
jQuery(document).ready(function () {
    jQuery('#fileuploadfield').on('change', function () {
        var filename = jQuery(this).val().split('\\').pop();
        var label = jQuery('.labelAnexar'); // Seleciona a label com a classe "labelAnexar"
        if (filename) {
            jQuery(this).addClass('d-flex').attr('data-filename', filename);
            label.addClass('ativa'); // Adiciona a classe "ativa"
        } else {
            jQuery(this).removeClass('d-flex').removeAttr('data-filename');
            label.removeClass('ativa'); // Remove a classe "ativa"
        }
    });
});
/*Menu Responsivo*/
// /*Botão de Menu*/
// jQuery(document).ready(function () {
//     jQuery('button#primary-mobile-menu').click(function () {
//         if (jQuery('.primary-menu-container').hasClass('aparecer')) {
//             jQuery('.primary-menu-container').removeClass('aparecer');
//         } else {
//             jQuery('.primary-menu-container').removeClass('aparecer');
//             jQuery('.primary-menu-container').addClass('aparecer');
//         }
//         if (jQuery('button#primary-mobile-menu').hasClass('acionar')) {
//             jQuery('button#primary-mobile-menu').removeClass('acionar');
//         } else {
//             jQuery('button#primary-mobile-menu').removeClass('acionar');
//             jQuery('button#primary-mobile-menu').addClass('acionar');
//         }
//     });
//     jQuery('.primary-navigation .primary-menu-container>ul>.menu-item').click(function () {
//         jQuery('.primary-menu-container').removeClass('aparecer');
//         jQuery('button#primary-mobile-menu').removeClass('acionar');
//     });
// });

jQuery(document).ready(function () {
    jQuery('button#primary-mobile-menu').click(function () {
        if (jQuery('.primary-menu-container').hasClass('aparecer')) {
            jQuery('.primary-menu-container').removeClass('aparecer');
        } else {
            jQuery('.primary-menu-container').removeClass('aparecer');
            jQuery('.primary-menu-container').addClass('aparecer');
        }
        if (jQuery('button#primary-mobile-menu').hasClass('acionar')) {
            jQuery('button#primary-mobile-menu').removeClass('acionar');
        } else {
            jQuery('button#primary-mobile-menu').removeClass('acionar');
            jQuery('button#primary-mobile-menu').addClass('acionar');
        }
    });

    jQuery('.primary-navigation .primary-menu-container>ul>.menu-item').click(function () {
        jQuery('.primary-menu-container').removeClass('aparecer');
        jQuery('button#primary-mobile-menu').removeClass('acionar');
    });

    // Verifica cliques fora do menu e não afeta o footer
    jQuery(document).click(function (event) {
        const $target = jQuery(event.target);
        if (
            !$target.closest('.primary-menu-container').length && // Clique fora do menu
            !$target.closest('button#primary-mobile-menu').length && // Clique fora do botão
            !$target.closest('footer').length // Ignora cliques no footer
        ) {
            jQuery('.primary-menu-container').removeClass('aparecer');
            jQuery('button#primary-mobile-menu').removeClass('acionar');
        }
    });
});

// Wow JS intalação
jQuery(document).ready(function () {
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function (box) {
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    })
    wow.init()
})
/*Travar Menu*/
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= 300) {
        jQuery('header.site-header').addClass('menuSuspenso')
    } else {
        jQuery('header.site-header').removeClass('menuSuspenso')
    }
})
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= 300) {
        jQuery('topBar').show()
    } else {
        jQuery('topBar').hide()
    }
})
/* Animação contador numerico - só adicionar a classe "contagem" na linha onde existe número */
jQuery(document).ready(function () {
    jQuery('.contagem').each(function () {
        var $this = jQuery(this);
        $this.prop('Counter', 0).animate(
            {
                Counter: $this.text()
            },
            {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $this.text(Math.ceil(now));
                }
            }
        );
    });
});
//   modal antigo
jQuery(document).ready(function () {
    jQuery('.btn-close').click(function () {
        jQuery('.modal').removeClass("show");
        jQuery('.modal').removeClass("d-block");
    });
});
//  modal novo
jQuery(document).ready(function () {
    window.openModalFromCard = function (button) {
        var imgUrl = jQuery(button).closest('.boxOferta').find('img').data('img-url');
        jQuery('#modalImage').attr('src', imgUrl);
        var modal = new bootstrap.Modal(document.getElementById('modalImgAmpliada'));
        modal.show();
    };
    jQuery('.modal').on('click', function (event) {
        if (jQuery(event.target).is('.modal')) {
            var modal = bootstrap.Modal.getInstance(this);
            modal.hide();
        }
    });
});
jQuery(document).ready(function () {
    jQuery('.btnFaq').click(function () {
        jQuery('.card-header').addClass("ativar");
    });
});
jQuery(document).ready(function () {
    jQuery('a.glink').click(function () {
        if (jQuery('span.linkIdiomas').hasClass('d-flex')) {
            jQuery('span.linkIdiomasPt').addClass('d-flex');
            jQuery('span.linkIdiomas').removeClass('d-flex');
        } else {
            jQuery('span.linkIdiomasPt').removeClass('d-flex');
            jQuery('span.linkIdiomas').addClass('d-flex');
        }
    })
});
// gamberine - sliders padrões 
jQuery(document).ready(function () {
    // Inicializar seletor
    if (jQuery('.bannerPrincipal').length) {
        jQuery('.bannerPrincipal').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            adaptiveHeight: true,
            autoplaySpeed: 6000,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            draggable: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        infinite: true,
                    },
                }
            ]
        });
    }
    // fim do seletor

    // Inicializar seletor
    if (jQuery('.sliderNovidades').length) {
        jQuery('.sliderNovidades').slick({
            autoplay: false,
            autoplaySpeed: 6000,
            speed: 600,
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 1,
                    },
                }
            ]
        });
    }
    // fim do seletor

    // Inicializar seletor
    if (jQuery('.sliderArqServicos').length) {
        jQuery('.sliderArqServicos').slick({
            slidesToShow: 4,
            rows: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 600,
            dots: false,
            arrows: false,
            draggable: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        rows: 2,
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 991, // Mobile settings
                    settings: {
                        infinite: false,
                        rtl: false,
                        rows: 1, // Remove as linhas extras
                        slidesToShow: 1, // Exibe apenas 1 slide por vez
                        slidesToScroll: 1, // Avança um slide por vez
                        dots: true, // Exibe as setas de navegação no mobile
                    },
                },
            ],
        });
    }
    // fim do seletor

    // Inicializar seletor
    if (jQuery('.sliderHistoria').length) {
        jQuery('.sliderHistoria').slick({
            slidesToShow: 4,
            rows: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 600,
            dots: false,
            arrows: false,
            draggable: true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        arrows: true,
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
    // fim do seletor
    // Inicializar seletor
    if (jQuery('.sliderParceiros').length) {
        jQuery('.sliderParceiros').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 600,
            dots: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1380,
                    settings: {
                        slidesToShow: 5,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        // centerMode: false,
                        //                 dots: true,
                    },
                },
            ],
        });
    }

    // fim do seletor
});
// gamberine - fim sliders padrões 
jQuery(document).ready(function () {
    if (jQuery('.sliderDestinos').length) {
        jQuery('.sliderDestinos').on('init', function (event, slick) {
            jQuery('.sliderDestinos .slick-slide').eq(slick.currentSlide).addClass('slick-current slick-active expandido');
        });

        jQuery('.sliderDestinos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 8000,
            speed: 600,
            dots: false,
            arrows: false,
            infinite: false,
            centerMode: false,
            rtl: false,
            draggable: true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: { slidesToShow: 5, },
                },
                {
                    breakpoint: 1200,
                    settings: { slidesToShow: 3, },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                        dots: true,
                    },
                },
            ],
        });

        // Atualiza o estado ativo ao mudar de slide
        jQuery('.sliderDestinos').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            jQuery('.sliderDestinos .slick-slide').removeClass('slick-current slick-active expandido');
            jQuery('.sliderDestinos .slick-slide').eq(nextSlide).addClass('slick-current slick-active expandido');
        });

        // Define comportamento no hover com transitionend
        jQuery('.sliderDestinos').on('mouseenter', '.slick-slide', function () {
            const $slide = jQuery(this);

            // Aguarda a transição antes de aplicar a classe
            $slide.one('transitionend', function () {
                jQuery('.sliderDestinos .slick-slide').removeClass('slick-current slick-active expandido');
                $slide.addClass('slick-current slick-active expandido');
            });

            // Caso não haja uma transição ativa, aplica imediatamente
            if (!$slide.is(':animated')) {
                $slide.trigger('transitionend');
            }
        });

        jQuery('.sliderDestinos').on('mouseout', function () {
            // Restaura o estado ativo para o slide atual
            const currentSlide = jQuery('.sliderDestinos').slick('slickCurrentSlide');
            jQuery('.sliderDestinos .slick-slide').removeClass('slick-current slick-active expandido');
            jQuery('.sliderDestinos .slick-slide').eq(currentSlide).addClass('slick-current slick-active expandido');
        });
    }
});
// gamberine - fim slider sliderDestinos 



// // Inicialização do slider taxonomy tipo viagem
jQuery(document).ready(function () {
    function initializeSlider(sliderId) {
        if (jQuery(sliderId).length) {
            jQuery(sliderId).slick({
                autoplay: true,
                autoplaySpeed: 6000,
                speed: 600,
                dots: false,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                // prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous">&lt;</button>',
                // nextArrow: '<button class="slick-next slick-arrow" aria-label="Next">&gt;</button>',
                responsive: [
                    {
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });

            // Ajuste do layout ao iniciar e ao redimensionar
            jQuery(sliderId).on('init', function () {
                jQuery(sliderId).slick('setPosition');
            });

            jQuery(window).on('resize', function () {
                jQuery(sliderId).slick('setPosition');
            });
        }
    }

    // Inicializar sliders
    initializeSlider('#sliderFamilia');
    initializeSlider('#sliderCasal');
    initializeSlider('#sliderInternacional');
    initializeSlider('#sliderNacional');
});

// // fim slider taxonomy tipo viagem
