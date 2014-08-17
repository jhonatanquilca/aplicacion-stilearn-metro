$(function() {

    maskAttributes();

    function maskAttributes() {

        $('input.telefono').mask('0-000-000');
        $('input.documento').mask('000000000-0');
        $('input.celular').mask('0000000000');
        $('input.ID').mask('0000000000');
        $('input.fax').mask('000-000000');
        $('input.numeric').mask('00000000000');
        $('input.money').mask('P999999999999999999999.ZZ', {
            translation: {
                'Z': {pattern: /[0-9]/, optional: true},
                'P': {pattern: /[1-9]/, },
            }});
        //continuar cargando formatos para input
    }

//acciones modal
    var primero = false;

    $("form").submit(function(e) {
//        alert($('form button.btn-success').attr('class'));

        if (verificarValidacionModal("form"))
        {
            if (primero)
            {
                var botonSubmit = $('form button.btn-success');
                $(botonSubmit).attr("disabled", true);
                $(botonSubmit).html('<img class="preload-small" src="' + themeUrl + 'img/preload-7-white.gif" alt=""> Espere...');
                $(botonSubmit).attr("disabled", true);
                $('form a').attr("disabled", true);
                $('form a').attr("onclick", "true");
            }
            else
            {
                primero = true;
            }

        }

        return;
    });
    function verificarValidacionModal($contenedor)
    {
        var verificar = true;
        $contenedor = $contenedor + ' div.control-group';
        $($contenedor).each(function(index, elemento) {
            if ($(elemento).hasClass('error'))
            {
                verificar = false;
            }
        });
        return verificar;
    }

    var buttons = $('.form-actions-float');
    floatButtons();
    $(window).scroll(function() {
        floatButtons();
    });

    function floatButtons() {
        if ($(window).scrollTop() + $(window).height() < $(document).height() - 30) { // To far, the navigation needs to be set in place
            buttons.addClass('flotante');
        } else {
            buttons.removeClass('flotante');
        }
    }
});
