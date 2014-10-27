$(function() {

}
);
function clickTab(searchFormId)
{

    searchForm = $("#form_" + searchFormId);
    $("#input_" + searchFormId).val('');
    $.fn.yiiGridView.update(searchFormId + '-grid', {
        data: $("#form_" + searchFormId).serialize(),
        complete: function(jqXHR, status) {
            if (status == 'success') {
//                console.log('completo');
            }
        }
    }
    );
    if (searchFormId == 'INACTIVO') {

        $('#sedMail').parent().fadeIn('fast');
    }
    if (searchFormId == 'ACTIVO') {
        $('#sedMail').parent().fadeOut('fast');
    }
}


function enviarMailRow(id) {

    bootbox.dialog("DESEAS EVIAR UN E-MAIL PERSONALIZADO?",
            [{
                    "label": "Cancelar", "class": "btn null", "data-handler": "0",
                    "callback": function() {
                        console.log("Cancelo");
                    }},
                {
                    "label": "No", "icon": "aweso-remove", "class": "btn btn-success",
                    "callback": function() {
                        $.ajax({
                            type: "POST",
                            dataType: 'json',
                            url: baseUrl + "mail/mail/ajaxEnvioMailSolo/id_cliente/" + id,
                            beforeSend: function() {
                                showModalSending();
                            },
                            success: function(data) {
                                $("#mainModal").modal("hide");
//                                console.log(data);
                                if (data.success) {
                                    bootbox.alert(data.messaje);
                                } else {
                                    bootbox.alert(data.error);
                                }
                            }
                        });
                    }},
                {
                    "label": "Si",
                    "icon": "aweso-ok",
                    "class": "btn btn-primary",
                    "callback": function() {
//                        console.log("SI");
                        url = "mail/mail/create/cliente_ids/" + id;
//                        window.console.log(baseUrl + url);
                        viewModal(url, false, function() {

                        })
                    }
                },
            ], {backdrop: "static"});

}
function enviarMailContactos(all) {
    if (all) {
        bootbox.dialog("DESEAS PERSONALIZAR EL EMAIL?",
                [
                    {
                        "label": "Cancelar",
                        "class": "btn null",
                        "data-handler": "0",
                        "callback": function() {
                            console.log("Cancelo");
                        }
                    },
                    {
                        "label": "No",
                        "icon": "aweso-remove",
                        "class": "btn btn-success",
                        "callback": function() {
                            ajaxEnvio(selected, all);
                        }
                    },
                    {
                        "label": "Si",
                        "icon": "aweso-ok",
                        "class": "btn btn-primary",
                        "callback": function() {
                            console.log("SI");

                        }
                    },
                ], {backdrop: "static"});

    } else {
        var selected = $("#ACTIVO-grid").selGridView("getAllSelection");
        if (selected != '') {
            bootbox.dialog("DESEAS PERSONALIZAR EL EMAIL?",
                    [
                        {
                            "label": "Cancelar",
                            "class": "btn null",
                            "data-handler": "0",
                            "callback": function() {
                                console.log("Cancelo");
                            }
                        },
                        {
                            "label": "No",
                            "icon": "aweso-remove",
                            "class": "btn btn-success",
                            "callback": function() {
                                ajaxEnvio(selected, all);
                            }
                        },
                        {
                            "label": "Si",
                            "icon": "aweso-ok",
                            "class": "btn btn-primary",
                            "callback": function() {
                                console.log("SI");

                            }
                        },
                    ], {backdrop: "static"});

        } else {
            bootbox.alert("Seleccione al menos un cliente." + selected);
        }
    }



}
function ajaxEnvio(selected, tipo) {
    $.ajax({
        type: "POST",
        url: baseUrl + (tipo ? "mail/mail/ajaxEnvioMailTodos" : "mail/mail/ajaxEnvioMailSeleccionados"),
        dataType: 'json',
        data: {id_cliente: selected},
        beforeSend: function() {
            showModalSending();
        },
        success: function(data) {
            if (data.success) {
                $("#maiMessages").removeClass('hidden');
                $("#maiMessages").html('<div class="alert alert-success" style="margin-bottom: 0px !important;">' +
                        '<button type="button" class="close" data-dismiss="alert">×</button>' +
                        data.message.toString() +
                        '</div>');
                $("#mainModal").modal("hide");
                $.fn.yiiGridView.update('ACTIVO-grid', {
                    data: baseUrl + 'cliente/cltCliente/admin/CltCliente_sel%5B0%5D/2/ajax/ACTIVO-grid/sort%2Fnombre_completo_desc//sort/nombre_completo.asc'
                });
            } else {
                $("#mainModal").modal("hide");
                bootbox.alert(data.message);
            }
        }
    });
}

