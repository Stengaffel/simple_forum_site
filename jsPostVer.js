function init() {
  var myForm = document.getElementById("usrform");
  myForm.onsubmit = validateForm;
}

onload = init;

function validateForm() {
  var text = document.getElementById("postInput").value;
  if( text.length <= 0) {
    alert("Please enter text before posting");
    return false;
  }
  else if( text.length > 400 ) {
    var message = "Character count exceeded. You are ";
    var diff = text.length - 400;
    message = message + diff + " characters above the limit!";
    alert(message);
    return false;
  }
}
