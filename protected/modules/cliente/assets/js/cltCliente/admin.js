$(function() {

}
);
function clickTab(searchFormId)
{
//    alert(searchFormId + "-grid");
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
}


function enviarMailSolo(id) {

    bootbox.dialog("DESEAS EVIAR UN E-MAIL PERSONALIZADO?",
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
                    "class": "btn btn-success",
                    "callback": function() {

                        $.ajax({
                            type: "POST",
                            url: baseUrl + "mail/mail/ajaxEnvioMailSolo/id_cliente/" + id,
                            dataType: 'json',
                            data: {clientes: id},
                            beforeSend: function() {
                                var html = "";
                                html += "<div class='modal-header bg-silver' ><div class='text-center'><img src='" + themeUrl + "img/preload-6-black.gif' /></div > <h4 class='text-center'>Enviando</h4></div></div>";
//                                html += "<div class='loading'><img src='" + themeUrl + "img/preload-6-black.gif' /></div>";
                                $("#mainModal").html(html);
                                $("#mainModal").modal("show");
                            },
                            success: function(data) {
                                $("#mainModal").modal("hide");
                                console.log('success');
                                if (data.success) {
                                    bootbox.alert(data.messaje);
                                } else {
                                    bootbox.alert(data.messaje);
                                }
                            }
                        });
                    }
                },
                {
                    "label": "Si",
                    "class": "btn btn-primary",
                    "callback": function() {
                        console.log("SI");
                        $.ajax({
                            type: "POST",
                            url: baseUrl + "mail/mail/sendEmail",
                            dataType: 'json',
                            data: {clientes: id},
                            beforeSend: function() {
                                showModalLoading();
                            },
                            success: function(data) {

                                if (data.success) {
                                    showModalData(data.html);
                                } else {
                                    $("#mainModal").modal("hide");
                                    bootbox.alert(data.error);
                                }
                            }
                        });
                    }
                },
            ], {backdrop: "static"});

}

