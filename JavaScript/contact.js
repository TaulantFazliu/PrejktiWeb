
function validate(event) {
    
    var name = document.forma.emri.value;
    var email = document.forma.email.value;
    var nameVal = document.getElementById('e1');
    var emailVal = document.getElementById("e2");

    if(!name || name == ""){
        event.preventDefault();
        nameVal.innerHTML = "Name can't be blank !";
        nameVal.style.visibility = 'visible';
        nameError = true;
    }
    else if(!validateName(name)){
        nameVal.innerHTML = "Invalid name !";
        nameVal.style.visibility = "visible";
        nameError = true;
    }
    else{
        nameError =false;
        nameVal.style.visibility = "hidden";
    }

    //email validation
    if(!email || email == ""){
        event.preventDefault();
        emailVal.innerHTML = "Email can't be blank !";
        emailVal.style.visibility = 'visible';
        emailError = true;
    }
    else if(!validateEmail(email)){
        emailVal.innerHTML = "Invalid email !";
        emailVal.style.visibility = "visible";
        emailError = true;
    }
    else{
        emailError =false;
        emailVal.style.visibility = "hidden";
        
    }

} 
function validateEmail(email) {
    var emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return emailRegex.test(String(email).toLowerCase());
  }
  function validateName(name){
      var nameRegex = /^([a-zA-Z]+)$/;
      return nameRegex.test(name);
  }
