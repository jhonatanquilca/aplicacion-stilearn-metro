$(function() {
    var url = baseUrl + 'actividades/actividad/admin/paginacion/5';
    $.ajax({
        type: "GET",
        url: url,
        beforeSend: function() {
//                        $('#' + etiquetaId).attr('style', 'height: 250px');
            splashIn('widget-actividades', 'actividades');
            splashShow(0);
        },
        success: function(data) {
            splashHide();
            $('#' + 'widget-actividades').attr('style', 'height: auto');
            $('#' + 'widget-actividades').append(data);

        }
    });
});
