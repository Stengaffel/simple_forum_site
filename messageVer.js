function init() {
  var myForm = document.getElementById("contact_form");
  myForm.onsubmit = validateForm;
}

onload = init;

function validateForm() {
  var subject = document.getElementById("txtSubject").value;
  var message = document.getElementById("txtMessage").value;

  var SUBJECT_LIMIT = 30;
  var MESSAGE_LIMIT = 1000;

  if(validateRequired(subject) && validateRequired(message)) {
    if(subject.length > SUBJECT_LIMIT) {
      var diff = subject.length - SUBJECT_LIMIT;
      var alertMessage = "Subject contains too many characters. " + diff + " characters over limit!";
      alert(alertMessage);
      return false;
    }

    if(message.length > MESSAGE_LIMIT) {
      var diff = message.length - MESSAGE_LIMIT;
      var alertMessage = "Message contains too many characters. " + diff + " characters over limit!";
      alert(alertMessage);
      return false;
    }
  }
  else {
    alert("Please fill out both fields before sending");
    return false;
  }
}

function validateRequired(input) {
  if(input.length <= 0) {
    return false;
  }
  else {
    return true;
  }
}
