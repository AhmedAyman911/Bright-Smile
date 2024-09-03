/*js*/
var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var submitError = document.getElementById('subit-error');
function myfunction(){

    var pass = document.getElementById('pass').value;
    var confirm_pass = document.getElementById('confirm_pass').value;
    if (pass != confirm_pass) {
        alert("Use same password")
    } else {
        alert("Password matched")
    }

  

    if(document.signin.username.value == "")
    {
        alert('username must be fillrd out ')
    }
    if(document.signin.password.value == "")
    {
        alert('password must be fillrd out ')
    }
    if(document.signin.confirmpassword.value == "")
    {
        alert('confirmpassword must be fillrd out ')
    }
    if(document.signin.age.value == "")
    {
        alert('age must be fillrd out ')
    }
    
}

function validateName(){
    var name =document.getElementById('contact-name').value;
    if(name.lenght==0){
        nameError.innerHTML ='Name is required';
        return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
         nameError.innerHTML ='Write full name';
         return false;
        
    }
    nameError.innerHTML = 'valid';
     return true;
}
function checkPwd(str) {
    if (str.length < 8) {
        alert("too_short");
    }  else if (str.search(/[a-zA-Z]/) == -1) {
        alert("no_letter");
    }  else if (str.search(/[A-Z]/) == -1) {
        alert("Your password needs an upper case letter")
    }  else if (str.search(/[a-z]/) == -1) {
        alert("Your password needs an lower case letter")
    }  else if (str.search(/\d/) == -1) {
        alert("no_num");
    }  else if (str.search(/[!@#$%^&*]/) == -1) {
        alert("no_special_charcter");
    }
  }

  
  function checkAge(age) {
    if (age < 16){
      alert("This website requires you to be 16 years or older to enter")
    }
    else if (age > 100){
      alert("Your age is not valid")
    }

    function validatephone(){
        var phone =document.getElementById('contact-phone').value;
    if(phone.lenght == 0 ){
        phoneError.innerHTML = 'phone no is required';
        return false;
    }
    if(phone.lenght !== 11){
        phoneError.innerHTML = 'phone no should be 11 digits';
        return false;
    }
    if(!phone.match(/^[0-10]{11}$/)){
        phoneError.innerHTML = 'Only digits please.';
        return false;
    }
    phoneError.innerHTML = 'valid';
    return true;
    function validateEmail(){
        var email =document.getElementById('contact-email').value;
        if(email.lenght == 0){
            emailError.innerHTML = 'Email is required'
            return false;
        }
        if(!email.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML = 'Email Invalid'
            return false;
        }
        emailError.innerHTML ='valid';
        return true;
    }
    function validateForm(){
        if(!validateName() || !validatephone() || !validateEmail() ){
            submitError.innerHTML ='please fix error to subit';
            return false;
        }
    }
}
  
  }
