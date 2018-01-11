var trackErrors=[];

$(document).ready(function(){
  enableRegisterButton();
});

function enableRegisterButton() {    
    if (trackErrors.length>0 || (checkFieldsNotEmpty().length>0)){
        document.getElementById("registerButton").disabled = "true";
    }
    else
       document.getElementById("registerButton").removeAttribute("disabled");
}

function checkFieldsNotEmpty() {
    var requiredFields = ['user','password_verify1', 'password_verify2'];
    return requiredFields.filter(function(val) {
        if (document.getElementById(""+val+"").value === '' || document.getElementById(""+val+"").value === null) {
            return true;
        }
        else 
            return false;
    });
    
}
//console.log(test);

function validateUsername() {
    var ajaxRequest;
    ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function () {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status == 200) {

            if (ajaxRequest.responseText.includes("**")) {
                $("#username_error").css("display","block");
                $(".user_input").addClass("has-error");
                
                if (trackErrors[trackErrors.length-1] !== 'usernameError')
                    trackErrors.push('usernameError');
                
                enableRegisterButton();
               // document.getElementById("registerButton").disabled = "true";
                
               // error.push('error');
                //console.log(''+error);
            }
            else {
                $("#username_error").css("display","none");
                $('#registerB').removeAttr('disabled');
                $(".user_input").removeClass("has-error");
                
                for (var c=0; c< trackErrors.length; c++) {
                    if (trackErrors[c] === 'usernameError') {
                        trackErrors.splice(c, 1);
                    }
                }
                
                enableRegisterButton();
               // document.getElementById("registerButton").removeAttribute("disabled");
                //error.pop();
                //console.log(''+error);

            }
        }    
    }
    var username = document.getElementById("user").value;
    ajaxRequest.open("GET", "../../controller/registrationController/verifyUser.php?username="+username);
    ajaxRequest.send();
}

function passwordVerify() {
    var ajaxRequest;

    ajaxRequest = new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status == 200) {
            if (!ajaxRequest.responseText.includes("same")) {
                $(".password_verify").addClass("has-error");
                $("#password_error").css("display","block");
                document.getElementById("registerButton").disabled = "true";
                
                if (trackErrors[trackErrors.length-1] !== 'passwordError')
                    trackErrors.push('passwordError');
                
                enableRegisterButton();
               // console.log(''+trackErrors);
            }
            else {                
                $(".password_verify").removeClass("has-error");
                $("#password_error").css("display","none");
                document.getElementById("registerButton").removeAttribute("disabled");
                
                for (var c=0; c< trackErrors.length; c++) {
                    if (trackErrors[c] === 'passwordError') {
                        trackErrors.splice(c, 1);
                    }
                }
                enableRegisterButton();
                //console.log(''+trackErrors);
            }
        }
    }
    var password1 = document.getElementById("password_verify1").value;
    var password2 = document.getElementById("password_verify2").value;
    ajaxRequest.open("GET","../../controller/registrationController/verifyPassword.php?password1="+password1+"&password2="+password2);
    ajaxRequest.send();
}