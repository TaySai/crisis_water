$(document).ready(function() {
    $('.see-code').click( function () {
        $(this).hide()
        $(this).closest(".case-eda").find('pre').show()
    });
    $('.close-code').click( function () {
        $(this).closest(".case-eda").find('pre').hide();
        $(this).closest(".case-eda").find('.see-code').show();
    });
});
