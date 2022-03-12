$(document).ready(function() {
    navbar.align();
    navbar.alignSearchField();
   // navbar.width();
});

$(document).ready(function(){
    $(window).resize(function() {
        //$("#custom-navbar-section").css("height","100%");
        // $("#custom-navbar").css("height","100%");
    });
});

var navbar = (function() {
    return {
        
        align : function() {   
         //  document.getElementById('custom-navbar').style.height = $(window).height() - $('.navbar').height()+"px";
          
         /*document.getElementById('custom-navbar').style.marginTop = $('.navbar').height()+18+"px";*/
        },
        
        display: function(element) {
            
            if (document.getElementById('custom-navbar').style.marginLeft == "0px") {
                /*$('#custom-navbar').css("width","0");*/
                $('#custom-navbar').css("marginLeft","-20rem");
                $(element).css("marginLeft", "0");
                $(".custom-navbar-text").css("transition", "0.1s ease-in")
                /*$(".custom-navbar-text").css("opacity",0);*/
               // $("#custom-navbar-section").animate({width:''},100);

            }
            else {
                $(element).css("marginLeft", "25rem");
               // $("#custom-navbar-section").animate({width:'toggle'},100);
               $(".custom-navbar-text").css("transition", "1.4s ease-in")
               $('#custom-navbar').css("marginLeft","0px");
                $('#custom-navbar').css("width","20rem");
                $(".custom-navbar-text").css("opacity",1);
            }            
        },
        
//        width: function() {
//            $('#custom-navbar').css("width", $(window).width() * 0.14578910120311395 +"px");
//        },
        alignSearchField: function (element) {
            //while($(window).width() >766)
            //$('#searchInput').css("margin-top", ((($('.navbar').height()/2) - ($('#searchInput').height()/2))/2) +"px");
        }
    
    }  
})();