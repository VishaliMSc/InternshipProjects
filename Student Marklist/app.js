var button = document.getElementById('submit_btn');

var stuName = document.getElementById('studentName');
var parName = document.getElementById('parentName');
var DOB = document.getElementById('dob');
var contactNumber = document.getElementById('mobileNo');
var email = document.getElementById('emailId');
var cit = document.getElementById('city');
var stat = document.getElementById('state');
var pcode = document.getElementById('pincode');

var nameRegex = /^[a-zA-Z\s]+$/;
var phoneRegex = /^\+\d{10}$/;
var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
var numRegex = /^\d{6}$/;
var today = new Date().toISOString().split('T')[0];
document.getElementById("dob").max = today;


button.addEventListener('click', function(event) {
    event.preventDefault();

    // Remove existing error messages
    var existingErrors = document.querySelectorAll('.ErrorMessage');
    existingErrors.forEach(function(error) {
        error.remove();
    });

    var studentErr = document.createElement('span');
    studentErr.classList.add("ErrorMessage");
    studentErr.innerHTML = "";

    if(stuName.value === ''){    
        stuName.parentNode.appendChild(studentErr);
        studentErr.innerHTML = "cannot be empty";
    }
    else if(!nameRegex.test(stuName.value)){
        stuName.parentNode.appendChild(studentErr);
        studentErr.innerHTML = "Letters only";
    }

    var parentErr = document.createElement('span');
    parentErr.classList.add("ErrorMessage");
    parentErr.innerHTML = "";

    if(parName.value === ''){    
        parName.parentNode.appendChild(parentErr);
        parentErr.innerHTML = "cannot be empty";
    }
    else if(!nameRegex.test(parName.value)){
        parName.parentNode.appendChild(parentErr);
        parentErr.innerHTML = "Letters only";
    }

    var contactErr = document.createElement('span');
    contactErr.classList.add("ErrorMessage");
    contactErr.innerHTML = '';

    if(contactNumber.value === '' || contactNumber.value.length <= 10){
        contactNumber.parentNode.appendChild(contactErr);
        contactErr.innerHTML = "cannot be empty";
    }
    else if(!phoneRegex.test(contactNumber.value)){
        contactNumber.parentNode.appendChild(contactErr);
        contactErr.innerHTML = "Numbers only";
    }

    var emailErr = document.createElement('span');
    emailErr.classList.add("ErrorMessage");
    emailErr.innerHTML = "";

    if(email.value === '' ){
        email.parentNode.appendChild(emailErr);
        emailErr.innerHTML = "cannot be empty";
    }
    else if(!emailRegex.test(email.value)){
        email.parentNode.appendChild(emailErr);
        emailErr.innerHTML = "Invalid Email format";
    }
    var cityErr = document.createElement('span');
    cityErr.classList.add("ErrorMessage");
    cityErr.innerHTML = "";

    if(cit.value === ''){    
        cit.parentNode.appendChild(cityErr);
        cityErr.innerHTML = "cannot be empty";
    }
    else if(!nameRegex.test(cit.value)){
        cit.parentNode.appendChild(cityErr);
        cityErr.innerHTML = "Letters only";
    }
    var stateErr = document.createElement('span');
    stateErr.classList.add("ErrorMessage");
    stateErr.innerHTML = "";

    if(stat.value === ''){    
        stat.parentNode.appendChild(stateErr);
        stateErr.innerHTML = "cannot be empty";
    }
    else if(!nameRegex.test(stat.value)){
        stat.parentNode.appendChild(stateErr);
        stateErr.innerHTML = "Letters only";
    }
    var pcodeErr = document.createElement('span');
    pcodeErr.classList.add("ErrorMessage");
    pcodeErr.innerHTML = "";

    if(pcode.value === ''){    
        pcode.parentNode.appendChild(pcodeErr);
        pcodeErr.innerHTML = "cannot be empty";
    }
    else if(!numRegex.test(pcode.value)){
        pcode.parentNode.appendChild(pcodeErr);
        pcodeErr.innerHTML = "Numbers only";
    }

});