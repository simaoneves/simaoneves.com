function validateForm() {
  var form = document.getElementById('form');
  var name = form.name.value;
  var email = form.email.value;
  var message = form.message.value;

  if ((email != '') && (message !='') && (name != '')) {
    return true;
  }
  else {
    return false;  
  }
}