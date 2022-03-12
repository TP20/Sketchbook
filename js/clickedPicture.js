document.querySelector(".pictureList-section").addEventListener("click", function() {
    
    if(document.querySelector("#recentlyViewedSection").style.maxHeight == "50rem")
    document.querySelector("#recentlyViewedSection").style.maxHeight="0rem";

    else 
    document.querySelector("#recentlyViewedSection").style.maxHeight="50rem";

})