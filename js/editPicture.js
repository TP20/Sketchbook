$(document).ready(function() {
    frame.alignNoImageSelectedText();
    frame.setGrid();
});

$(document).ready(function() {
    $(window).resize(function(){
        frame.setGrid();
    });
});

var frame = (function() {
    return {
        alignNoImageSelectedText : function () {
            document.getElementById("selectImage_text").style.marginTop = ($("#pixlrFrame").height() / 2) - $("#selectImage_text").height()  +"px";
            document.getElementById("uploadImage_text").style.marginTop = ($("#pixlrFrame").height() / 2) - $("#uploadImage_text").height()  +"px"; 

        },

        setGrid : function() {
           if ($(window).width() < 915) {
                //$("#pixlrFrame").removeClass("col-sm-5");
                //$("#pixlrFrame").addClass("col-sm-7 col-xs-7");
           }

           else if ($(window).width() < 1163 && $(window).width() > 915) {
                $("#pixlrFrame").removeClass("col-sm-5");
                $(".imageSection").addClass("col-sm-2");
                $(".imageSection").removeClass("col-sm-5");
                $("#pixlrFrame").addClass("col-sm-7 col-xs-7");
           }
           else if ($(window).width() < 1413 && $(window).width() > 1163 ) {
                $(".imageSection").removeClass("col-sm-5");
                $(".imageSection").removeClass("col-sm-2");
                $(".imageSection").addClass("col-sm-4");
                $("#pixlrFrame").removeClass("col-sm-7 col-xs-7");
                $("#pixlrFrame").addClass("col-sm-5");

           }

           else {
                $(".imageSection").removeClass("col-sm-4");
                $("#pixlrFrame").removeClass("col-sm-7 col-xs-7");
                $("#pixlrFrame").addClass("col-sm-5");
                $(".imageSection").addClass("col-sm-5");
           }
        }
    }
})();
