$(document).ready(function(){
    $(".hamberger").click(function(){
        // toggle type one
        $(".header__nav").toggle(function(){
            $(".header__nav").css("right", "100%");       
        }, function(){
            $(".header__nav").css("left", "0");      
        });


        // toggle type 2
        // $(".header__nav").toggle().css("right", "0");
    })
})