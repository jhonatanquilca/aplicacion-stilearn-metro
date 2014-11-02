$(function() {

//    $('.display-truulo-search-options').click(function(e) {
//        e.preventDefault();
//        e.stopPropagation();
//        $(this).next('.truulo-search-options').toggle();
//    });
//    
//    $('.truulo-search-options').click(function(e) {
//        e.stopPropagation();
//    });
//    
//    $('html').click(function() {
//        $(this).parent().find('.truulo-search-options').hide();
//    });
//    
//    $('.truulo-search-options input.all').click(function(){
//        if($(this).is(':checked')) {
//            $('.truulo-search-options input').each(function(){
//                $(this).not('.all').removeAttr('checked');
//            });
//        } else {
//            return false;
//        }
//        
//    });
//    
//    $('.truulo-search-options input').not('.all').click(function(){
//        if ($('.truulo-search-options input:checked').length == 0) {
//            $('.truulo-search-options input.all').trigger('click');
//            $('.truulo-search-options input.all').attr('checked', 'checked');
//        } else {
//            $('.truulo-search-options input.all').removeAttr('checked');
//        }
//    });
//    

    $('a.ColVis_ref').click(function(e) {
        if (($(this).attr('disabled'))) {
            console.log('entro');
            return false;
        }
        var disabled = $('#" . $this->id . "').find(':input:disabled').removeAttr('disabled');
        if ($('input#' + $(this).attr('id') + '').is(':checked')) {
            $('input#' + $(this).attr('id') + '').removeAttr('checked');
            $.fn.yiiGridView.update('" . $this->grid_id . "', {
                data: $('#" . $this->id . "').serialize(),
                complete: function(jqXHR, status) {
                    if (status == 'success') {
                        console.log('completo');
                    }
                },
                beforeSend: function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                    console.log('enviado');
                },
            });
        } else {
            $('input#' + $(this).attr('id') + '').attr('checked', 'checked');
            $.fn.yiiGridView.update('" . $this->grid_id . "', {
                data: $('#" . $this->id . "').serialize(),
                complete: function(jqXHR, status) {
                    if (status == 'success') {
                        console.log('completo');
                    }
                },
                beforeSend: function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                    console.log('enviado');
                },
            });

        }
        disabled.attr('disabled', 'disabled');
//                     e.preventDefault();
        e.stopPropagation();
//               return false;
    });

    $('span.ColVis_radio>input').click(function(e) {

        $.fn.yiiGridView.update('" . $this->grid_id . "', {
            data: $('#" . $this->id . "').serialize(),
            complete: function(jqXHR, status) {
                if (status == 'success') {
                    console.log('completo');
                }
            },
            beforeSend: function() {
//                var settings= $.fn.yiiGridView.gridSettings['" . $this->grid_id . "'];
//                    $('#" . $this->grid_id . "').addClass(settings.loadingClass);
                console.log('enviado');
            },
        });
        e.stopPropagation();
    })

});