// NO EMPTY FILES

$('#disablebutt').attr('disabled', 'disabled');

$(document).ready(function() {
    $('.input-group input').keyup(function() {

        var width = 0;

        $('.input-group #rip').each(function() {
            if ($(this).val().length == 0 && width > 0) {
                $('#bar').attr('style', 'width : ' + width +'%');
            }
            else {
                width += 50;
                $('#bar').attr('style', 'width : ' + width +'%');
            }
            if (width == 100)
                $('#disablebutt').removeAttr('disabled');
        });
    });
});

// NO EMPTY FILES

$.material.init();