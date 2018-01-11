function validate(){
testNumber();
testPassword();
if (testNumber() && testPassword())
return true;
else return false;
}
function testNumber(){
var a = isNaN(document.registerer.pNumber2.value);
var b =document.registerer.pNumber2.value;
  if (a || b=='')
  {
  alert("No characters allowed only integers");
  document.getElementById("num").style.border="red solid";
  document.registerer.pNumber2.value= '';
    return false;
  }

  else {return true;}
}

function testPassword(){
var firstP= document.registerer.pWord.value;
var secondP= document.registerer.pWord2.value;

if (firstP != secondP ){
   document.registerer.pWord.value ='';
   document.registerer.pWord2.value='';
   document.getElementById("p1").style.border="red solid";
   document.getElementById("p2").style.border="red solid";
	alert("passwords dont match");
return false;
}

else return true;
}
