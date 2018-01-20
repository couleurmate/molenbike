$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#backtop').fadeIn();
        }else{
            $('#backtop').fadeOut();
        }
    });
    $('#backtop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
