// var email = document.getElementById("email");
// var password = document.getElementById("pass").value;
// var errorParagraph = document.getElementById("error-p");
// var actionForm = document.getElementById("action");

// emptyEmailMessage.style.display = "none";

// var message = "";

function validateEmail(email) {
    // var email = document.getElementById("email");
    // var message = "";
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat)) {
        return true;
    }
    else {
        return false;
    }
}

var message = "";

//define validate that will call submit 
function validate() {
    // var message = "";
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var errorParagraph = document.getElementById("error-p");
    var errorParagraph2 = document.getElementById("error-p2");
    var errorParagraph3 = document.getElementById("error-p3");
    var ship_seven = document.getElementById("seven");
    var ship_three = document.getElementById("three");
    var ship_overnight = document.getElementById("overnight");
    var chris = document.getElementById("chris");
    var anti = document.getElementById("anti");
    var bball = document.getElementById("bball");

    errorParagraph.innerHTML = "";
    errorParagraph2.innerHTML = "";
    errorParagraph3.innerHTML = "";

    if (email.value == "") {
        message = "Please enter an email.";
        errorParagraph.innerHTML = message;
        // errorParagraph2.innerHTML = "";
        // errorParagraph3.innerHTML = "";
        return false;
    }
    else if (validateEmail(email) == 0) {
        message = "You must enter a valid email.";
        errorParagraph.innerHTML = message;
        // errorParagraph2.innerHTML = "";
        // errorParagraph3.innerHTML = "";
        return false;
    }
    else if (password.value == "") {
        
        message = "Please enter a password.";
        errorParagraph.innerHTML = message;
        // errorParagraph2.innerHTML = "";
        // errorParagraph3.innerHTML = "";
        return false;
    }
    else if (chris.value == 0 && anti.value == 0 && bball.value == 0) {
        message = "You must choose at least one item to order.";
        errorParagraph2.innerHTML = message;
        // errorParagraph.innerHTML = "";
        // errorParagraph3.innerHTML = "";
        
        return false;
    }
    else if (ship_seven.checked == 0 && ship_three.checked == 0 && ship_overnight.checked == 0)
    {
        message = "You must choose a shipping option.";
        errorParagraph3.innerHTML = message;
        // errorParagraph2.innerHTML = "";
        // errorParagraph.innerHTML = "";
        return false;
    }
    else {
        return true;
    }
}