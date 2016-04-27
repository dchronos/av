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
                    ////console.log(jQuery(this).val().split('_')[1]);
                    level.pontos += valor;
                }
            }
        });
    });
}
!function() {
    //console.log("first var");
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
            //console.log(level.matrix, "Matrix");
        },

        configurar: function() {
            //screen.orientation.lock('portrait');
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
                    //console.log("falso!!!");
                }
                level.matrix[k] = {
                    "id": jQuery(this).children('div').attr("id"),
                    "status":  visibleItem
                };
                k++;
            });

        },

        registrarAcoes: function() {
            jQuery('.start').click(level.aoAbrirModal);
            jQuery('.btn-continue').click(level.aoFecharModal);
            jQuery('.play').on('click', level.aoIniciar);
            jQuery('.modal').delegate('.btn-continue', 'click', level.aoContinuar);
        },
        ajustarTela: function() {
            var calcWidth = jQuery('.stepbox ul li').outerWidth(true) * jQuery('.stepbox ul li').length;
            var porcentagem = jQuery(".count").html();
            jQuery('.stepbox ul').width(calcWidth);
            jQuery('.preloader').delay(1000).fadeOut('slow');

            jQuery('.elements .parallax-1').delay(5200).animate({bottom: '-1px'});
            setTimeout(function () {
                jQuery('.section-first .parallax, .logo-avaliacao').addClass('animate');
            }, 5100);
            setTimeout(function () {
                jQuery('.section-first').addClass('go');
            }, 5400);

            //FUTURE ANIMATE
            jQuery('.future .elements .parallax-2, .future .elements .parallax-3').delay(5000).animate({bottom: '30px'});
            jQuery('.future .elements .parallax-4').delay(5300).animate({bottom: '130px'});
            jQuery('.future .elements .parallax-5').delay(5300).animate({bottom: '120px'});
            jQuery('.future .elements .parallax-6').delay(5300).animate({bottom: '220px'});
            setTimeout(function () {
                jQuery('.parallax-7, .parallax-8').addClass('animate');
            }, 8300);
            setTimeout(function () {
                jQuery('.future .ilustra').addClass('animate');
            }, 5300);

            //PAST ANIMATE
            jQuery('.past .elements .parallax-2').delay(5300).animate({bottom: '25px'});
            jQuery('.past .elements .parallax-3').delay(5300).animate({bottom: '100px'});
            jQuery('.past .elements .parallax-4').delay(5300).animate({bottom: '165px'});
            jQuery('.past .elements .parallax-5, .past .elements .parallax-6').delay(5300).animate({bottom: '140px'});
            jQuery('.past .elements .last-parallax').delay(5300).animate({bottom: '240px'});
            setTimeout(function () {
                jQuery('.past').addClass('animate');
            }, 5300);
            setTimeout(function () {
                jQuery('.past .ilustra').addClass('animate');
            }, 5300);
            setTimeout(function () {
                jQuery('#aguia').addClass('animate');
            }, 6300);



            jQuery('.preloader-result').delay(1000).fadeOut('slow');
            jQuery('.result-loader').delay(400).animate({width: porcentagem + '%'});

            jQuery('.result .content, .finish article').delay(7000).animate({opacity: '1', transition: 'opacity .2s ease-out' });
            setTimeout(function () {
                jQuery('.figures').addClass('open');
            }, 6500);
            setTimeout(function () {
                jQuery('.figures figure').addClass('down');
            }, 6600);
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

            var window = jQuery(window),
                html = jQuery('.ilustra');

            function resize() {
                if (jQuery.window.width() < 1024) {
                    return jQuery.html.removeClass('animate');
                }

                jQuery.html.addClass('animate');
            }

            window.resize(resize).trigger('resize');

            jQuery('.recomendar').on('click', function() {

                var scrollAnchor = jQuery(this).attr('data-scroll'),
                    scrollPoint = jQuery('section[data-anchor="' + scrollAnchor + '"]').offset().top + 0;

                jQuery('body,html').animate({
                    scrollTop: scrollPoint
                }, 500);

                return false;

            });

            //$('.figures').delay(5300).animate({width: '100%', height: '70%', bottom: '0'});
            //$('.figures figure').delay(5400).animate({transform: transforms, opacity: '1'});
            setTimeout(function () {
                jQuery('.figures').addClass('open');
            }, 6500);
            setTimeout(function () {
                jQuery('.figures figure').addClass('down');
            }, 6600);
        },

        proximaEtapa: function() {
            //console.log("Level Atual4 ",level.atual);
            console.log("MATRIXXXX PORRA");
            //Atualiza array
            var k = 0;
            atualiza_pontos(level);
            jQuery(".webform-component").each(function(){
                var visibleItem = true;
                if(jQuery(this).hasClass('webform-conditional-hidden')){
                    visibleItem = false;
                    ////console.log("falso!!!");
                }

                level.matrix[k] = {
                    "id": jQuery(this).children('div').attr("id"),
                    "status":  visibleItem,
                    "seqItem": k
                };
                k++;
            });
            //console.log(level.totalPossivel, "Total Possivel");
            //console.log(level.pontos, "Pontos Possivel");
            //console.log(level.matrix, "Matrix");

            level.matrix.forEach(function(value){
                //console.log(value);
                //console.log("Level Atual pre upate: " + level.atual);
                if(value.seqItem > (level.atual + 4)){
                    if(value.status){
                        level.atual = value.seqItem - 4;
                        //console.log(level.atual,"LEvel atual");
                        level.matrix.length = 0;
                        return 0;
                    }
                }
            });
            console.log(level.atual, "level");

            var transition = 'translateZ(0) translateX(' + (-jQuery('.stepbox ul li').outerWidth(true) * level.atual) + 'px)';

            jQuery('ul', '.stepbox').css(
                { '-ms-transform': transition, '-webkit-transform': transition, 'transform': transition }
            );
            jQuery('#level-' + ++level.atual).addClass('select');
        },

        aoAbrirModal: function() {
            //console.log("Level Atual5 ",level.atual);
            console.log("aoAbrirModal Start");
            jQuery('.modal-start, .section-first').toggleClass('open');


            jQuery("#cadastroForm").validate({
                rules: {
                    email: {
                        //required: true,
                        email: true
                    },
                    /*whatsapp: {
                     required: true
                     },*/
                },
                messages: {
                    email: "teste",
                    //whatsapp: "",

                },
                submitHandler: function(e) {
                    //console.log("submitHandler");
                    jQuery("section.questions").show();
                    jQuery(".modal-start").removeClass('open'),
                        jQuery(".section-first").addClass('next'),
                        jQuery(".main").addClass('open');


                    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                        // some code..
                    } else {

                        function initNinja() {

                            createjs.MotionGuidePlugin.install();
                            canvas = document.getElementById("ninja");
                            exportRoot = new lib.NinjaFase();

                            stage = new createjs.Stage(canvas);
                            stage.addChild(exportRoot);
                            stage.update();
                            createjs.Ticker.setFPS(lib.properties.fps);
                            createjs.Ticker.addEventListener("tick", stage);
                        }

                        setTimeout(function () {
                            initNinja();
                        }, 2000);

                    }

                }

            });

            jQuery("#whatsapp").mask("(99) 99999-999?9").ready();
        },

        aoFecharModal: function() {
            //console.log("Level Atual",level.atual);
            jQuery('.modal').removeClass('open');
        },

        aoIniciar: function() {
            //console.log("Level Atual6 ",level.atual);

            jQuery('#modal-' + jQuery(this).data('target')).addClass('open');


        },

        aoContinuar: function() {
            //console.log("Ao Continuar");
            jQuery('.select').removeClass('select');
            jQuery(this).closest('.modal').removeClass('open');
            //jQuery('#level-' + jQuery(this).data('next')).addClass('select');
            console.log(jQuery(this).data('next'), "DataNext");
            console.log(level.atual, "Level Atual");
            setTimeout(level.proximaEtapa, 150);
        }
    };
    jQuery(document).ready(level.inicializar());
    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        // some code..
    } else
    {
        //Now include js files
        var canvas, stage, exportRoot;
        var canvas2, stage2, exportRoot2;
        function init() {
            // --- write your JS code here ---

            createjs.MotionGuidePlugin.install();

            canvas2 = document.getElementById("aguia");
            exportRoot2 = new lib.aguia2();

            stage2 = new createjs.Stage(canvas2);
            stage2.addChild(exportRoot2);
            stage2.update();

            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage2);
        }

        window.onload = function(){
            init();
        };

    }
    //screen.orientation.lock('portrait').catch(function() {
    //    //console.log('Orientation locked');
    //});
}();

jQuery(document).ready((function($){
    var level = {
        pontos: 0,
        totalPossivel: 0,
    }
    var pathname = window.location.pathname.split('/');
    //console.log(pathname, "TECT");
    if(pathname.length == 4){
        $("section.questions").hide();
        $("section.section-first").hide();
        $("#page").hide();
        //$('.result').hide();
        //$('.finish').hide();
        $('#page-top').hide();
        $('#skip-link').hide();
    }
    else{
        $("section.questions").hide();
        $("#page").hide();
        //$('.result').hide();
        //$('.finish').hide();
        $('#page-top').hide();
        $('#skip-link').hide();
    }



    //As 4 primeiras perguntas
    $('input[name="player"]').bind('keypress keyup blur',function() {
        $('#edit-submitted-pergunta-1').val($(this).val());
    });
    $('input[name="empresa"]').bind('keypress keyup blur',function() {
        $('#edit-submitted-empresa').val($(this).val());
    });
    $('input[name="whatsapp"').bind('keypress keyup blur',function() {
        $('#edit-submitted-whatsapp').val($(this).val());
    });
    $('input[name="email"').bind('keypress keyup blur',function() {
        $('#edit-submitted-email').val($(this).val());
    });
    $('.btn-possui-alguma-iniciativa-relacionada-a').bind('click',function() {
        jQuery('.preloader').show();
        $('.webform-submit').click();
        //console.log("submit");

    });

    // btn-start


    $("input[id^=edit-submitted]").each(function(value){
        ////console.log($(this).attr("id"));
        //matrix[k] = {
        //    "id": $(this).attr("id"),
        //    "status":  $(this).css('display')
        //};
        var modalValue = $(this).attr("id").replace("edit-submitted-","modalfront-");
        var drupalValue = $(this).attr("id");
        //console.log("Modal Value",modalValue);
        $("#" + modalValue).on('keypress keyup blur click change',function() {
            //console.log("CLICK!!");
            var valor = 0;
            $("#" + drupalValue).click();
            $("#" + drupalValue).prop("checked", true).trigger("change");
            valor = $("#" + drupalValue).val();
            //console.log(valor, "valor do item");

            atualiza_pontos(level);
            //console.log(level.totalPossivel, "Total Possivel");
            //console.log(level.pontos, "Pontos");
            //console.log(Math.floor(level.pontos/level.totalPossivel*100), "Porcentagem");
            jQuery(".loaderbar").attr("style", "width: "+ Math.floor(level.pontos/level.totalPossivel*100) +"%");
        });;
    });


})(jQuery));

// jQuery('.count').each(function () {
//     jQuery(this).prop('Counter',0).animate({
//         Counter: jQuery(this).text(),
//     }, {
//         duration: 7000,
//         easing: 'swing',
//         step: function (now) {
//             jQuery(this).text(Math.ceil(now));
//         }
//     });
//
// });

jQuery('.recomendar').on('click', function() {
    console.log("recomendar");
    var scrollAnchor = jQuery(this).attr('data-scroll'),
        scrollPoint = jQuery('section[data-anchor="' + scrollAnchor + '"]').offset().top + 100;

    jQuery('body,html').animate({
        scrollTop: scrollPoint
    }, 500);

    return false;

});