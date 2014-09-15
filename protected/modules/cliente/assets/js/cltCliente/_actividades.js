$(function() {
    etiquetaId = 'widget-actividades';
    var url = baseUrl + 'actividades/actividad/admin/paginacion/5';
    $.ajax({
        type: "GET",
        url: url,
        beforeSend: function() {
//                        $('#' + etiquetaId).attr('style', 'height: 250px');
            splashIn(etiquetaId, 'actividades');
            splashShow();
        },
        success: function(data) {
            splashHide();
            $('#' + etiquetaId).attr('style', 'height: auto');
            $('#' + etiquetaId).append(data);

        }
    });
});
