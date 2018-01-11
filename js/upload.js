function checkTitleName(){
    var ajaxRequest = new XMLHttpRequest();
    var title= document.getElementById('titleField').value;
    
    ajaxRequest.onreadystatechange = function () {
        if (ajaxRequest.status === 200) {
            if (ajaxRequest.responseText.includes("true")){
                $("#titleExist_error").css("display", "block");
                document.getElementById("uploadButton").disabled ="true";
            }
            else {
                 $("#titleExist_error").css("display", "none");
                 document.getElementById("uploadButton").removeAttribute("disabled");
            }
        }
    }
    
    ajaxRequest.open("GET", "../controller/checkTitle.php?title="+title);
    ajaxRequest.send();
}

