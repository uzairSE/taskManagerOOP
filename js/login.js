const form= document.getElementById('form1');
const username= document.getElementById('name');
const password= document.getElementById('password');
//document.getElementById('name').style.borderColor = "red";


form.addEventListener('input', e => {
	e.preventDefault();
	validation(e);
    
});
form.addEventListener('submit', e => {
	e.preventDefault();
	validation (e);
});
function validation(e){
    usernameValue = username.value.trim();
    passwordValue = password.value.trim();
    console.log(e.target.name);
    if (e.target.name == "name") {
    if(usernameValue === ''){
        setErrorName(username);
        document.getElementById('name').style.borderColor = "red";
        console.log('1')
    }
    else if(!isName(usernameValue)){
        setErrorName(username);
        document.getElementById('name').style.borderColor = "red";
        console.log('2')
    }
else 
{
    setSuccessName(username);
    document.getElementById('name').style.borderColor = "#7FFF00";
}
    }
    if (e.target.name == "password") {
if(passwordValue === ''){
    setErrorPass(password);
    document.getElementById('password').style.borderColor = "red"; 
}
else if( passwordValue.length <= 7){
    setErrorPass();
    
}
else 
{
setSuccessPass();

}

}
}
function setErrorName(input){
    const formControl = input;
    console.log(input);
    formControl.className = 'error';
}
function setSuccessName(){
    document.getElementById('name').style.borderColor = "#7FFF00";
}
function setErrorPass(input){
    
    const formControl = input;
    console.log(input);
    formControl.className = 'error';
}
function setSuccessPass(){
    document.getElementById('password').style.borderColor = "#7FFF00";
}

function isName(name1){
	return /^(([A-Za-z]{1,10})\s*[A-Za-z]{1,10})?$/.test(name1);
}