require('./bootstrap');
require('inputmask/lib/jquery.inputmask');
require('imask');

$(function () {
    $('[data-toggle="tooltip"]').tooltip({ html: true });
    $("#phone").inputmask({"mask": "+7(\\999)999-99-99", removeMaskOnSubmit: true, onUnMask: function(maskedValue) {
        return maskedValue.replace(/[_\W]+/g, '');
    }});
  });
