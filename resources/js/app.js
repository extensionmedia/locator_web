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
    
    setInterval(() => {
        $('.isAjax').each(function(){
            if(!$(this).hasClass('loaded')){
                var route = $(this).attr('data-route');
                $(this).addClass('loaded').load(route);
            }
        });        
    }, 500);

    $('.modal').on('click', function(){
        var container = $(this).data('container');
        var html = `
                    <div class="z-10 absolute top-0 left-0 right-0 bottom-0 w-full h-full " style="background-color: rgba(200,200,200, 0.3)">
                        {content}
                    </div>
                `;
        var content = `
            <div class="w-96 mx-auto mt-4 shadow bg-white rounded p-5 model-content">
                content
            </div>
        `;
        $("."+container).addClass('relative').append(html.replace("{content}", content));
        $(".model-content").hide().slideDown( 200 );
    })
});
