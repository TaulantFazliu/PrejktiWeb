var errOnEmail = false;
var errOnNum = false;
var errOnNam = false;



function validate() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    var nameVal = document.getElementById('e1');
    var emailVal = document.getElementById("e2");
    var NumVal = document.getElementById("e3");

    if (!name || name == "" || name.trim(" ") == "") {
        nameVal.innerHTML = "Name can't be blank";
        nameVal.style.visibility = "visible";
        errOnNam = true;
    }
    //  else if (!validateName(name)) {
    //     nameVal.innerHTML = "Invalid name";
    //     nameVal.style.visibility = "visible";
    //     errOnNam = true;
    // }
     else {
        errOnNam = false;
        nameVal.style.visibility = "hidden";
    } 

    if (!email || email == "" || email.trim(" ") == "") {
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

    if(!number || number == ""){
        NumVal.innerHTML = "Number can't be blank"
        NumVal.style.visibility = "visible"
        errOnNum = true;
    }
    // else if(!validateNumber(number)){
    //     NumVal.innerHTML = "Invalid number";
    //     NumVal.style.visibility = "visible";
    //     errOnNum = true;
    // }
    else if (number.length > 9 || number.length < 9) {
        NumVal.innerHTML = "Number must be 9 digits";
        NumVal.style.visibility = "visible";
        errOnNum = true;
    }
     else {
        NumVal.style.visibility = "hidden";
        errOnNum = false;
        
    }

    if (errOnNam) {
        return false;
    } else if (errOnEmail) {
        return false;
    } else if(errOnNum) {
        return false;
    }else{
        return true;
    }
} 

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
// function validateName(name) {
//     var re = /^[a-zA-z]$/g;
//     return re.test(String(name).toLowerCase());
// }
// function validateNumber(number) {
//     var re = /^[0-9]$/;
//     return re.test(String(number).toLowerCase());
// }