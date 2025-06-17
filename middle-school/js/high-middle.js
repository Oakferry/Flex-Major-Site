$(document).ready(function () {
    let animado = false;
    let timeoutScroll;

    function estaMeioVisivel(elem) {
        const windowTop = $(window).scrollTop();
        const windowBottom = windowTop + $(window).height();

        const elementTop = $(elem).offset().top;
        const elementHeight = $(elem).outerHeight();
        const elementMiddle = elementTop + elementHeight / 2;

        return elementMiddle >= windowTop && elementMiddle <= windowBottom;
    }

    function atualizarAnimacao() {
        if (estaMeioVisivel("#beneficios")) {
            if (!animado) {
                animado = true;
                $(".linha-1").css("transform", "scaleY(1)");
                $(".linha-2").css("transform", "scaleY(1)");
                $(".linha-3").css("transform", "scaleY(1)");
            }
        } else {
            if (animado) {
                animado = false;
                $(".linha-1").css("transform", "scaleY(0)");
                $(".linha-2").css("transform", "scaleY(0)");
                $(".linha-3").css("transform", "scaleY(0)");
            }
        }
    }

    $(window).on("scroll", function () {
        clearTimeout(timeoutScroll);
        timeoutScroll = setTimeout(atualizarAnimacao, 100);
    });

    // Executar ao carregar a página
    atualizarAnimacao();
});

