function validateForm() {
  var name = document.forms['myForm']['usrname'];
  var course = document.forms['myForm']['course'];
  var email = document.forms['myForm']['email'];
  var password = document.forms['myForm']['pass'];
  var con_password = document.forms['myForm']['cp'];

  console.log(email);
  if (name.value == '') {
    window.alert('Please enter your name.');

    return false;
  }

  if (course.value == '') {
    window.alert('Please enter your Course.');

    return false;
  }

  if (email.value == '') {
    window.alert('Please enter your email address.');

    return false;
  }

  if (password.value == '') {
    window.alert('Enter your password');

    return false;
  }

  if (con_password.value == '') {
    window.alert('Enter Confirm Password');

    return false;
  }

  if (password.value != con_password.value) {
    window.alert('Password does not match');
    return false;
  }

  return true;
}
