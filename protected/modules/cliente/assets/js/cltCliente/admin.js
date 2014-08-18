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




