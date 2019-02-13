$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $('#vietlott').click(function() {
        $("i", this).toggleClass("fas fa-plus fas fa-minus");
    });
    $('#soicau').click(function() {
        $("i", this).toggleClass("fas fa-plus fas fa-minus");
    });
    $('#thongkevip').click(function() {
        $("i", this).toggleClass("fas fa-plus fas fa-minus");
    });
});