$(function(){
    var width = $(window).width(),
        height = $(window).height(),
        image = new Image();
    image.src = "/blur.php?w=" + width + "&h=" + height;
    image.onload = function(){
        $(".develop-text")
            .addClass("bg")
            .css({ "background-image": "url(" + image.src + ")"});
    };
});