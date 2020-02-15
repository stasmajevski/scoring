require('./bootstrap');
require('inputmask/lib/jquery.inputmask');

$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        html: true
    });

    $("#phone").inputmask({
        "mask": "+7(\\999)999-99-99",
        removeMaskOnSubmit: true,
        onUnMask: function (maskedValue) {
            return maskedValue.replace(/[_\W]+/g, '');
        }
    });

    $("button[type=submit]").attr("disabled", "disabled");

    $('input, select').keypress(function () {
        $("button[type='submit']").removeAttr('disabled');
    });

    $('select').change(function () {
        $("button[type='submit']").removeAttr('disabled');
    });
});
