$(document).ready(function(){

    $(".up").click(function(){
        $("body,html").animate({
            scrollTop: "0px"
        }, 200);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() >100){
            $(".up").slideDown(300);
        } else {
            $(".up").slideUp(300);
        }
    });
});