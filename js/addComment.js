function addComment() {
    var ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange= function() {
        if (ajaxRequest.status == 200) {
            var div = document.getElementById("existingComments");
            div.innerHTML = ajaxRequest.responseText;
        }
    }
    var commentText = document.getElementById("commentTextArea").value;

    ajaxRequest.open("GET", "../controller/jsonController.php?comment="+commentText+"&image=".GET['image']+"&title="+$_GET['title']+"&username="+$_GET['username']);
    ajaxRequest.send();
}
