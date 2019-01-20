$('#image-container').scroll(function() {
    var x = $(this).scrollTop();
    $(this).css('background-position', '0% ' + parseInt(-x / 10) + 'px');
});

$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#announcement").offset().top
    }, 1500);
});
