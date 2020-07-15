function validate1(event){
    var email = document.forma2.email.value;
    var password = document.forma2.password.value;
    var emailVal = document.getElementById('e4');
    var passwordVal = document.getElementById('e5');
    var emailError = false;
    var passwordError = false;

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

    //password validation
    if(!password || password == ""){
        event.preventDefault();
        passwordVal.innerHTML = "Password can't be blank !";
        passwordVal.style.visibility = 'visible';
        passwordError = true;
    }
    else{
        passwordError =false;
        passwordVal.style.visibility = "hidden";
    }

    function validateEmail(email) {
        var emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return emailRegex.test(String(email).toLowerCase());
      }

}

