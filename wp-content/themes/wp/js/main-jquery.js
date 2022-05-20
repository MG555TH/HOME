// For all custom jQuery codes
jQuery(document).ready(function($) {
    jQuery('.-slot').on('click', function() {
        iframe = jQuery(this).data('iframe');
        jQuery('#slot-iframe').attr('src', iframe);
    });
    jQuery('.s-modal-close').on('click', function() {
        jQuery('#slot-iframe').attr('src', '');
    });
    jQuery('.-btn_f_regis').on('click', function() {
        jQuery('#ModalRegis').appendTo('body').modal('show');
    });
    jQuery('-btn-login').on('click', function() {
        jQuery('#ModalLogin').appendTo('body').modal('show');
    });

    // function initJackpot() {
    //     getJackpotValues('200;100', 1);
    // }
    // initJackpot();
    if (jQuery('.jackpot-num').length) {
        var counter = 1;
        var discount_number = 60;
        var CountDownManageMAX = function(obj, c, data) {
            var t;
            timedCount();
            counter += 1;

            function timedCount() {
                var number = parseFloat(obj.data().point);
                var sum = number + Math.random();
                obj.data('point', sum);
                obj.text(jQuery.number(sum, 2));
                c = c - 1;
                if (c == 0) {
                    c = discount_number;
                }
                t = setTimeout(function() {
                    timedCount();
                }, 1000);
            }
        };
        new CountDownManageMAX(jQuery('.number.jackpot-num.0'), discount_number, '');
        new CountDownManageMAX(jQuery('.number.jackpot-num.1'), discount_number, '');
        new CountDownManageMAX(jQuery('.number.jackpot-num.2'), discount_number, '');
        new CountDownManageMAX(jQuery('.number.jackpot-num.3'), discount_number, '');
        new CountDownManageMAX(jQuery('.number.jackpot-num.4'), discount_number, '');
        new CountDownManageMAX(jQuery('.number.jackpot-num.5'), discount_number, '');
    }
    // alert(jQuery('.jackpot-num').length);
});