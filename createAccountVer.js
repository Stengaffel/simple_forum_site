function init() {
  var myForm = document.getElementById("account_form");
  myForm.onsubmit = validateForm;
}

onload = init;

function validateForm() {
  var name = document.getElementById("txtName").value;
  var email = document.getElementById("txtEmail").value;
  var username = document.getElementById("txtUsername").value;
  var password = document.getElementById("txtPassword").value;
  var password2 = document.getElementById("txtPassword2").value;

  var isFormFilled = false;
  var isPasswordEqual = false;
  var isEmailValid = validateEmail(email);

  if( validateRequired(name) && email.length > 0 && validateRequired(username)
  && validateRequired(password) && validateRequired(password2)) {
    isFormFilled = true;
  }
  else {
    alert("Please fill out the entire form before submitting");
    return false;
  }

  if(password == password2) {
    isPasswordEqual = true;
  }

  if(isFormFilled && isPasswordEqual && isEmailValid) {
    alert("Your account will now be created!");
  }
  else if(!isEmailValid) {
    alert("Please enter a valid email-address");
    return false;
  }
  else if(!isPasswordEqual) {
    alert("Both passwords do not match");
    return false;
  }
}

function validateRequired(input) {
  var isValid = false;
  if(input.length == 0 || input.length > 25) {
    isValid = false;
  }
  else {
    isValid = true;
  }
  return isValid;
}

function validateEmail(email) {
  var isValid = false;
  if(email.indexOf("@") == -1 || email.indexOf(".") == -1) {
    isValid = false;
  }
  else {
    isValid = true;
  }
  return isValid;
}
