const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


function validimi(form) {
	let inputs = document.querySelectorAll("input");
	// const paswordi=document.getElementById('password');
	// const name=document.getElementById('uname');

    if (form == 0 && inputs[2].value == "" && inputs[3].value == "" && inputs[4].value == "") {
			alert("Can't Sign Un , fields can not be blank! Fill the fields...");
    } else if (form == 1 && inputs[0].value == "" && inputs[1].value == "") {
			alert("Can't Sign In , fields can not be blank! Fill the fields...");
	}
	
	
}