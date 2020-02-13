require('./bootstrap');
require('inputmask/lib/jquery.inputmask');

$(function () {
    $('[data-toggle="tooltip"]').tooltip({ html: true });
    $("#phone").inputmask({"mask": "+9 (999) 999-99-99", removeMaskOnSubmit: true});
});
