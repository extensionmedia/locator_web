require('./bootstrap');

$(document).ready(function(){
    $('.dropdown').on('click', function(e){
        $(".dropdown-content").slideUp('fast');
        var dropdown = $(this).find('.dropdown-content');
        dropdown.slideToggle( 200, 'swing');
        e.stopPropagation();
    });

    $(".dropdown").on('click', function(e){
        e.stopPropagation();
    });

    $(document).on('click', function (e) {
        $(".dropdown-content").slideUp('fast');
    });

});
