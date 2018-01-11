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
           document.getElementById('custom-navbar').style.marginTop = $('.navbar').height()+18+"px";
        },
        
        display: function(element) {
            if (document.getElementById('custom-navbar-section').style.display == "block") {
                $('#custom-navbar-section').css("display","none");
                $(element).css("marginLeft", "0px");
               // $("#custom-navbar-section").animate({width:''},100);

            }
            else {
                $(element).css("marginLeft", "232px");
               // $("#custom-navbar-section").animate({width:'toggle'},100);
                $('#custom-navbar-section').css("display","block");
            }            
        },
        
//        width: function() {
//            $('#custom-navbar').css("width", $(window).width() * 0.14578910120311395 +"px");
//        },
        alignSearchField: function (element) {
            
            $('#searchInput').css("margin-top", ((($('.navbar').height()/2) - ($('#searchInput').height()/2))/2) +"px");
        }
    
    }  
})();