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

    $('.reset_password').on('click', function(){
        $('.reset_password_message').fadeIn('fast', function(){
            setTimeout(function(){ $('.reset_password_message').slideUp('fast'); }, 3000);
        });
    });

    $('.upload_image').on('click', function(){
        $('.upload_image_message').fadeIn('fast', function(){
            setTimeout(function(){ $('.upload_image_message').slideUp('fast'); }, 3000);
        });
    });
    
});
