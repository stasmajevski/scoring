require('./bootstrap');
require('inputmask/lib/jquery.inputmask');

$(function () {
    $('[data-toggle="tooltip"]').tooltip({ html: true });
    $("#phone").inputmask({"mask": "+9 (999) 999-99-99", removeMaskOnSubmit: true});
});

$(document).on('change','#create-terms',function(){
    if($(this).is(':checked')){
       $('#create-terms').val(1);
    }else{
       $('#create-terms').val(0);
    }
});


$(document).on('change','#edit-terms',function(){
    if($(this).is(':checked')){
       $('#edit-terms').val(1);
    }else{
       $('#edit-terms').val(0);
    }
});
