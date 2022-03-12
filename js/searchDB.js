function searchPic() {
   var ajaxRequest = new XMLHttpRequest();

    if (document.getElementById("searchInput").value == "") {
        $("#resultsSection").css("display", "none");
       // $(".videoSection").css("display","block");
        $("#recentlyAddedSection").css("display", "block");
        $("#recentlyViewedSection").css("display", "block");
    }  
    else {
        $("#recentlyAddedSection").css("display", "none");
        $("#recentlyViewedSection").css("display", "none"); 
        $("#resultsSection").css("display", "block");
    }

  var searchVal = document.getElementById("searchInput").value;

  ajaxRequest.onreadystatechange = function () {

      if (ajaxRequest.status ==200) { 
          if ((document.getElementById("searchInput").value != "") && (!ajaxRequest.responseText.includes ("false"))) {
              $("#noresults").css("display", "none");
              $("#recentlyAddedSection").css("display", "none");
              $("#recentlyViewedSection").css("display", "none");
              $("#resultsSection").css("display", "block");
              $("#resultsVideos").css("display", "flex");
              $("#resultsVideos").css("flex-flow", "row wrap");
              var idDiv =document.getElementById("resultsVideos");
              idDiv.innerHTML = ajaxRequest.responseText;
          }
          else {
              $("#resultsVideos").css("display", "flex");
              $("#resultsVideos").css("flex-flow", "row wrap");

              $("#noresults").css("display", "block");
          }
      }        
  }

  ajaxRequest.open("GET", "../controller/searchController.php?searchVid="+searchVal);
  ajaxRequest.send();
}

    