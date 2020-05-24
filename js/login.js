const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


// function validimi(form) {
// 	let inputs = document.querySelectorAll("input");
// 	// const paswordi=document.getElementById('password');
// 	// const name=document.getElementById('uname');

//     if (form == 0 && inputs[2].value == "" && inputs[3].value == "" && inputs[4].value == "") {
// 			alert("Can't Sign Un , fields can not be blank! Fill the fields...");
//     } else if (form == 1 && inputs[0].value == "" && inputs[1].value == "") {
// 			alert("Can't Sign In , fields can not be blank! Fill the fields...");
// 	}
	
	
// }

var errOnEmail = false;
var errOnPass = false;



function validateform() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('passs').value;
    var emailVal = document.getElementById("e4")
    var passVal = document.getElementById("e5")

    if (!email || email == ""  || email.trim(" ") == "") {
        emailVal.innerHTML = "Email can't be blank";
        emailVal.style.visibility = "visible";
        errOnEmail = true;
    } else if (!validateEmail(email)) {
        emailVal.innerHTML = "Invalid email";
        emailVal.style.visibility = "visible";
        errOnEmail = true;
    } else {
        errOnEmail = false;
        emailVal.style.visibility = "hidden";
    }

    if (password.length < 8) {
        passVal.innerHTML = "Password must be at least 8 characters long.";
        passVal.style.visibility = "visible";
        errOnPass = true;
    } else {
        errOnPass = false;
        passVal.style.visibility = "hidden";
    }

    if (errOnEmail) {
        return false;
    } else if (errOnPass) {
        return false;
    } else {
        return true;
    }
} 

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

var errOnEmail2 = false;
var errOnPass2 = false;
var errOnFname = false;

function validateform2() {
    var Fname = document.getElementById('e').value;
    var email2 = document.getElementById('em').value;
    var password2 = document.getElementById('psw').value;
    var FnameVal = document.getElementById("e1")
    var email2Val = document.getElementById("e2")
    var pass2Val = document.getElementById("e3")

    if (!Fname || Fname == "") {
        FnameVal.innerHTML = "Name can't be blank"
        FnameVal.style.visibility = "visible"
        errOnFname = true;
    } else if (!validateFname(Fname)) {
        FnameVal.innerHTML = "Invalid Name"
        FnameVal.style.visibility = "visible"
        errOnFname = true;
    } else {
        errOnFname = false;
        FnameVal.style.visibility = "hidden"
    }

    if (!email2 || email2 == "") {
        email2Val.innerHTML = "Email can't be blank"
        email2Val.style.visibility = "visible"
        errOnEmail2 = true; 
    } else if (!validateEmail2(email2)) {
        email2Val.innerHTML = "Invalid email"
        email2Val.style.visibility = "visible"
        errOnEmail2 = true;
    } else {
        errOnEmail2 = false;
        email2Val.style.visibility = "hidden"
    }

    if (password2.length < 6) {
        pass2Val.innerHTML = "Password must be at least 6 characters long."
        pass2Val.style.visibility = "visible"
        errOnPass2 = true
    } else {
        errOnPass2 = false;
        passVal.style.visibility = "hidden"
    }

    if (errOnFname) {
        return false;
    } else if (errOnLname) {
        return false;
    } else if (errOnEmail2) {
        return false;
    } else if (errOnPass2) {
        return false;
    } else {
        return true;
    }
}

function validateEmail2(email2) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email2).toLowerCase());
}

function validateFName(Fname) {
  var re = /[A-Z][a-zA-Z][^#&<>\"~;$^%{}?]{1,20}$/g;
  return re.test(String(Fname));
} 