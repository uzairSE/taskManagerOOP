const form = document.getElementById('form');
const fname = document.getElementById('title');
const lname = document.getElementById('description');
const datee=document.getElementById('date');
//var radio = document.getElementsByClassName('SelectGender');

var list = document.getElementById('list1').value;

var listId = document.getElementById('list1');



  

//form.addEventListener('submit', e => {

  //  e.preventDefault();
      
//	return checkInputs();
  
//});


function checkInputs() {

    let result = true;
	// trim to remove the whitespaces
	const fNameValue = fname.value.trim();
	const lNameValue = lname.value.trim();
	const dateValue = datee.value;

	if (fNameValue === '') {
		setErrorFor(fname, 'Title cannot be blank');
                result = false;
	}
	//else if (!isName(fNameValue)) {
	//setErrorFor(fname, 'Not a valid Title');
        //result = false;}
    else {
		setSuccessFor(fname);
              
                
	}
	if (lNameValue === '') {
		setErrorFor(lname, 'Description cannot be blank');
                result = false;
	}
	 
	else {
		setSuccessFor(lname);
             
	}
        
	if (dateValue === '') {
		setErrorFor(datee, 'date cannot be blank');
                result = false;
	}
	 
	else {
		setSuccessFor(datee);
               
	}
	
		//list
	if (listId.value ==='0') {
		setErrorFor(listId, 'Select a User');
                result = false;
	}
	else {
		setSuccessFor(listId);
                
	}
       return result; 
}
	function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
        
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

//function isName(name1){
//	return /^(([A-Za-z0-9]{1,15})\s*[A-Za-z0-9]{1,15})?$/.test(name1);
//}
