$(".btn-primary").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 1000);

    $("#subjectSelect").val($(this).data("ordertype"));
});
