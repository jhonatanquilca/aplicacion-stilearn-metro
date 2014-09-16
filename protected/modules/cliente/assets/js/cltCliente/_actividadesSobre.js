$(function() {
    var url = baseUrl + 'actividades/actividad/actividadesCliente/paginacion/5/idCliente/'+idCliente;
    $.ajax({
        type: "GET",
        url: url,
        beforeSend: function() {
//                        $('#' + etiquetaId).attr('style', 'height: 250px');
            splashIn('widget-actividades-sobre', 'actividades');
            splashShow(0);
        },
        success: function(data) {
            splashHide();
            $('#' + 'widget-actividades-sobre').attr('style', 'height: auto');
            $('#' + 'widget-actividades-sobre').append(data);

        }
    });
});
