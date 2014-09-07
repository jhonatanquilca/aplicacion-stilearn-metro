var scripts = $(function() {
    //sidebar lista desplegada activa
    $('li[class="dropdown-list active"]').children('ul').css('display', 'block');
//    $('li[class="dropdown-list active open"]').children('ul').css('display', 'block');


//amascara para imputs
    maskAttributes();
    dessabilitarEntreOnForm();



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
                $(botonSubmit).html('<img class="preload-mini" src="' + themeUrl + 'img/preload-6-white.gif" alt=""> Espere...');

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

//menu sidebar despligar y contraer menu
    var e = $("[data-toggle=dropdown-list]");
    jQuery(e).click(function() {
        var last = jQuery('.dropdown-menu.open', $('#navside'));
        last.removeClass("open");
        jQuery('.arrow', last).removeClass("open");
        jQuery('.dropdown-list', last).slideUp();
        var sub = jQuery(this).next();

        if (sub.is(":visible")) {

            jQuery('.arrow', jQuery(this)).removeClass("open");
            jQuery(this).parent().removeClass("open");
            sub.slideUp(200);
        } else {
            jQuery('.arrow', jQuery(this)).addClass("open");
            jQuery(this).parent().addClass("open");
            sub.slideDown();
        }
    });

//modal
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
        if ($(window).scrollTop() + $(window).height() < $(document).height() - 40) { // To far, the navigation needs to be set in place
            buttons.addClass('flotante');
        } else {
            buttons.removeClass('flotante');
        }
    }
});
function dessabilitarEntreOnForm() {
    $("form").keypress(function(e) {
//        alert(e.which);
        if (e.which == 13) {
            return false;
        }
    });
}

var attrBotonModal = {};


function maskAttributes() {

    $('input.telefono').mask('0-000-000');
    $('input.documento').mask('000000000-0');
    $('input.celular').mask('0000000000');
    $('input.ID').mask('0000000000');
    $('input.fax').mask('000-000000');
    $('input.numeric').mask('00000000000');
    $('input.money').mask('P99.ZZ', {
        translation: {
            'Z': {pattern: /[0-9]/, optional: true},
            'P': {pattern: /[0-9]/, },
        }});
    //continuar cargando formatos para input
}


//funciones modal

function showModalLoading() {
    var html = "";
    html += "<div class='modal-header'><a class='close' data-dismiss='modal'>&times;</a><h4><i class='icon-refresh'></i> Cargando</h4></div>";
    html += "<div class='loading'><img src='" + themeUrl + "img/preload-6-black.gif' /></div>";
    $("#mainModal").html(html);
    $("#mainModal").modal("show");
}

function showModalData(html, large) {
    if (large) {
        $("#mainModal").addClass("modal-large")
    }
    $("#mainModal").html(html);
    $('select.fix').selectBox();
}
/**
 * 
 * @param {cadena} url
 * @returns {undefined}
 */
function viewModal(url, large, CallBack)
{

    $.ajax({
        type: "POST",
        url: baseUrl + url,
        beforeSend: function() {
            showModalLoading();
        },
        success: function(data) {
            showModalData(data, large);
            CallBack();

        }
    });
}

function AjaxAtualizacionInformacion(Formulario)
{
    BloquearBotonesModal(Formulario);
    AjaxGestionModal(Formulario, function(list, data) {

        ActualizarInformacion(list);
    });
}

function BloquearBotonesModal($form)
{
    //Seleccionando el boton de guardado 

    var btnSave = $form + " a.btn-success";
    //Guardado caracterÃ­sticas 

    attrBotonModal['action'] = $(btnSave).attr('onclick');

    attrBotonModal['html'] = $(btnSave).html();

    $(btnSave).attr("disabled", true);
    $(btnSave).html('<img class="preload-small" src="' + themeUrl + 'img/preload-7-white.gif" alt=""> Espere...');
    $(btnSave).attr("onclick", "true");


    var elemento = $form + ' a[data-dismiss="modal"]';
    $(elemento).attr("disabled", true);
    $(elemento).attr('data-dismiss', 'long');



}
function DesBloquearBotonesModal($form)
{
    var btnSave = $form + " a.btn-success";
    $(btnSave).html(attrBotonModal.html);
    $(btnSave).attr("disabled", false);
    $(btnSave).attr("onclick", attrBotonModal.action);

    var elemento = $form + ' a[data-dismiss="long"]';
    $(elemento).attr("disabled", false);
    $(elemento).attr('data-dismiss', 'modal');


}
function AjaxGestionModal($form, CallBack) {
    var form = $($form);
    var settings = form.data('settings');

    settings.submitting = true;

    $.fn.yiiactiveform.validate(form, function(messages) {
//        console.log(messages + 'hola');
        $.each(messages, function() {
            console.log(this);
        });


        if ($.isEmptyObject(messages)) {
            $.each(settings.attributes, function() {
                $.fn.yiiactiveform.updateInput(this, messages, form);
            });
            AjaxGuardarModal(true, $form, CallBack);
        }
        else {
            settings = form.data('settings'),
                    $.each(settings.attributes, function() {
                        $.fn.yiiactiveform.updateInput(this, messages, form);
                    });
            DesBloquearBotonesModal($form, 'Enviar', 'AjaxAtualizacionInformacion');
        }
    });
}

function AjaxGuardarModal(verificador, Formulario, callBack)
{
    if (verificador)
    {
//        var listaActualizar = Formulario.split('-');        
//        listaActualizar = listaActualizar[0] + '-grid';
        var listaActualizar = Formulario.replace('form', 'grid');
//        listaActualizar = listaActualizar[0] + '-grid';
//        console.log(listaActualizar);
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: $(Formulario).attr('action'),
            data: $(Formulario).serialize(),
            beforeSend: function(xhr) {
            },
            success: function(data) {
//                console.log(data.mensage);
//                alert('entre');
                if (data.success) {
                    $("#mainModal").modal("hide");
                    callBack(listaActualizar, data);


                } else {

                    bootbox.alert(data.mensage, function() {
                        DesBloquearBotonesModal(Formulario);
                    });


                }
            }
        });
    }

}
function ActualizarInformacion(lista)
{
    var listaActual = lista.replace('#', '');

    if ($(lista).length == 0)
    {
        window.location.reload();
    }
    else
    {
        $.fn.yiiGridView.update(listaActual);
    }




}