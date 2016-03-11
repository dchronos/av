function atualiza_pontos(level) {
    level.totalPossivel = 0;
    level.pontos = 0;
    jQuery(".webform-component").each(function () {
        jQuery(this).find('input').each(function () {
            var valor = 0;
            if (jQuery(this).attr("type") == "radio") {
                valor = parseInt(jQuery(this).val());
                level.totalPossivel += valor;
                if (jQuery(this).is(':checked')) {
                    level.pontos += valor;
                }
            }
            if (jQuery(this).attr("type") == "checkbox") {
                valor = parseInt(jQuery(this).val().split('_')[1]);
                level.totalPossivel += valor;
                if (jQuery(this).is(':checked')) {
                    //console.log(jQuery(this).val().split('_')[1]);
                    level.pontos += valor;
                }
            }
        });
    });
}
!function() {
    console.log("first var");
    var level = {
        atual: 0,
        finalizar: false,
        matrix: new Array(),
        pontos: 0,
        totalPossivel: 0,

        inicializar: function() {
            level.configurar();
            level.registrarAcoes();
            level.inicializarMatrix();

            console.log(level.matrix, "Matrix");
        },

        configurar: function() {
            //screen.orientation.lock('portrait');
            console.log("Level Atual1 ",level.atual);

            jQuery('.step').css({ width: jQuery('body').width(), height: jQuery('body').width() });
            jQuery('.stepbox li').css({ width: jQuery('body').width() });

            level.ajustarTela();
        },

        inicializarMatrix: function(){
            var k = 0;
            jQuery(".webform-component").each(function(){
                var visibleItem = true;
                if(jQuery(this).hasClass('webform-conditional-hidden')){
                    visibleItem = false;
                    console.log("falso!!!");
                }
                level.matrix[k] = {
                    "id": jQuery(this).children('div').attr("id"),
                    "status":  visibleItem
                };
                k++;
            });

        },

        registrarAcoes: function() {
            console.log("registrarAcoes");
            console.log("Level Atual2 ",level.atual);
            jQuery('.start').click(level.aoAbrirModal);
            jQuery('.btn-continue').click(level.aoFecharModal);
            jQuery('.play').on('click', level.aoIniciar);
            jQuery('.modal').delegate('.btn-continue', 'click', level.aoContinuar);
        },
        ajustarTela: function() {
            var calcWidth = jQuery('.stepbox ul li').outerWidth(true) * jQuery('.stepbox ul li').length;
            jQuery('.stepbox ul').width(calcWidth);
            jQuery('.preloader').delay(1000).fadeOut('slow');
            jQuery('.preloader-result').delay(1000).fadeOut('slow');
            jQuery('.result-loader').delay(400).animate({width: '92%'});
            jQuery('.figures').delay(5300).animate({width: '100%', height: '70%', bottom: '0'});
            jQuery('.figures figure').delay(5400).animate({top: '0', opacity: '1'});
        },

        proximaEtapa: function() {
            console.log("Level Atual4 ",level.atual);

            //Fluxo das perguntas
            //if(level.atual == 0) {
            //    if (jQuery("#edit-submitted-possui-estrategia-digital-2").is(':checked')) {
            //        level.atual = 6;
            //    }
            //    else{
            //        level.atual++;
            //    }
            //}
            //else if(level.atual == 2){
            //    if(jQuery("#edit-submitted-em-sua-estrategia-esta-prevista-a-utilizacao-de-conceitos-digital-para-alavancar-o-seu-negocio-2").is(':checked')){
            //        level.atual = 4;
            //    }
            //    else{
            //        level.atual++;
            //    }
            //}
            //else if(level.atual == 7){
            //
            //}
            //else{
            //    level.atual++;
            //}

            //Atualiza array
            var k = 0;
            atualiza_pontos(level);
            jQuery(".webform-component").each(function(){
                var visibleItem = true;
                if(jQuery(this).hasClass('webform-conditional-hidden')){
                    visibleItem = false;
                    //console.log("falso!!!");
                }

                level.matrix[k] = {
                    "id": jQuery(this).children('div').attr("id"),
                    "status":  visibleItem,
                    "seqItem": k
                };
                k++;
            });
            console.log(level.totalPossivel, "Total Possivel");
            console.log(level.pontos, "Pontos Possivel");
            console.log(level.matrix, "Matrix");

            level.matrix.forEach(function(value){
                if(value.seqItem > (level.atual + 4)){
                    if(value.status){
                        level.atual = value.seqItem - 4;
                        console.log(level.atual,"LEvel atual");
                        level.matrix.length = 0;
                    }
                }
            });
            console.log(level.atual, "level");

            jQuery('ul', '.stepbox').css({ left: (-jQuery('.stepbox ul li').outerWidth(true) * level.atual) + 'px' });
        },

        aoAbrirModal: function() {
            console.log("Level Atual5 ",level.atual);
            jQuery('.modal-start').toggleClass('open');
        },

        aoFecharModal: function() {
            console.log("Level Atual",level.atual);
            jQuery('.modal').removeClass('open');
        },

        aoIniciar: function() {
            console.log("Level Atual6 ",level.atual);


            jQuery('#modal-' + jQuery(this).data('target')).addClass('open');

        },

        aoContinuar: function() {
            jQuery(this).closest('.modal').removeClass('open');
            setTimeout(level.proximaEtapa, 150);
        }
    };
    jQuery(document).ready(level.inicializar());
}();

jQuery(document).ready((function($){
    var level = {
        pontos: 0,
        totalPossivel: 0,
    }
    var pathname = window.location.pathname.split('/');
    console.log(pathname, "TECT");
    if(pathname.length == 4){
        $("section.questions").hide();
        $("section.section-first").hide();
        //$("#page").hide();
        //$('.result').hide();
        //$('.finish').hide();
    }

    $("section.questions").hide();
    //$("#page").hide();
    //$('.result').hide();
    //$('.finish').hide();

    //As 4 primeiras perguntas
    $('.player').bind('keypress keyup blur',function() {
        $('#edit-submitted-pergunta-1').val($(this).val());
    });
    $('.empresa').bind('keypress keyup blur',function() {
        $('#edit-submitted-empresa').val($(this).val());
    });
    $('.whatsapp').bind('keypress keyup blur',function() {
        $('#edit-submitted-whatsapp').val($(this).val());
    });
    $('.email').bind('keypress keyup blur',function() {
        $('#edit-submitted-email').val($(this).val());
    });
    $('.btn-possui-alguma-iniciativa-relacionada-a').bind('click',function() {
        jQuery('.preloader').show();
        $('.webform-submit').click();

    });

    $('.btn-start-main').bind('click',function() {
        $('.modal').removeClass('open');
        $("section.questions").show();
        $(".section-first").hide();
    });


    $("input[id^=edit-submitted]").each(function(value){
        //console.log($(this).attr("id"));
        //matrix[k] = {
        //    "id": $(this).attr("id"),
        //    "status":  $(this).css('display')
        //};
        var modalValue = $(this).attr("id").replace("edit-submitted-","modalfront-");
        var drupalValue = $(this).attr("id");
        console.log(modalValue);
        $("#" + modalValue).on('keypress keyup blur click change',function() {
            //console.log("CLICK!!");
            var valor = 0;
            $("#" + drupalValue).prop("checked", true).trigger("change");
            valor = $("#" + drupalValue).val();
            console.log(valor, "valor do item");

            atualiza_pontos(level);
            console.log(level.totalPossivel, "Total Possivel");
            console.log(level.pontos, "Pontos");
        });;
    });


})(jQuery));

jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text(),
    }, {
        duration: 7000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });

});

jQuery('.recomendar').on('click', function() {

    var scrollAnchor = jQuery(this).attr('data-scroll'),
        scrollPoint = jQuery('section[data-anchor="' + scrollAnchor + '"]').offset().top + 100;

    jQuery('body,html').animate({
        scrollTop: scrollPoint
    }, 500);

    return false;

});