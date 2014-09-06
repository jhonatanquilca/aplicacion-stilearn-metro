$(function() {
    dessabilitarEntreOnForm();

});
function AjaxAtualizacionInformacion(Formulario, idDeuda)
{
    BloquearBotonesModal(Formulario);
    AjaxGestionModal(Formulario, function(list, data) {

        ActualizarInformacion(list);
        ActualizarInformacion('#clt-deuda-grid');
        ActualizarTotalDeudaHeader(idDeuda);
    });
}
function ActualizarTotalDeudaHeader(idDeuda)
{
    $('#totalDeuda').hide('fast');
    $('#totalDeuda').text('');
    $.ajax({
        type: "GET",
        dataType: 'json',
        url: baseUrl + 'cliente/cltDeuda/ajaxGetMonto',
        data: {"id": idDeuda, },
        beforeSend: function(xhr) {
        },
        success: function(data) {

            number = Number(data.monto);

            $('#totalDeuda').text('Deuda Total $ ' + number.toFixed(2) + ' ctvs.');
            $('#totalDeuda').fadeIn('slow');
        }
    });

}