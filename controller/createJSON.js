//$(document).ready(function(){
//    
//    $("#commentForm").submit(function() {
//        console.log($(this).serializeJSON());
//    });
//});

function createJSON() {
    console.log("testing");
//    var jsonForm = $("form.commentForm").serializeJSON();
    var jsonForm = $("form.commentForm").serializeJSON();
    console.log("testing2:  "+jsonForm);
    var file = fopen("testing.txt",3);
    fwrite(file, jsonForm, APPEND);
//    var divtest = document.getElementById('testJSON');
    
//    divtest.innerHTML("<p>"+jsonForm+"</p>");
    
}

//function createJSON() {
//    
//    jsonObj = [];
//    
//    $("input[class=comment]").each(function()
//                                  
//    )
//    
//}