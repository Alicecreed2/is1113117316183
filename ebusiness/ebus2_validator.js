/* global $ */

function validateName(){
    
    var name;
    
    name = document.getElementById("user_name").value;

    if (name == ""){
        alert("Please enter a name.");
    }
    else if (!name.match(/^[a-zA-Z]+$/)){
        alert('Only letters are allowed in a name.');
    }
    else{
        validateEmail();
    }

}

function validateEmail(){
    
    var email;
    
    email = document.getElementById("user_email").value;
    
    if (email == ""){
        alert("please enter an email.")
    }
    else if (validateInputEmail(email) == false){
        alert("Please enter a valid Email ID");
    }
    else{
        validatePin();
    }
}

function validatePin(){
    
var pin;
    
    pin = document.getElementById("user.pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN.");
    }
    else if (pin.length < 4){
        alert("Your PIN must be 4 digits.");
    }
    else{
        enablebtnPurchase()
    }
}


function validateInputEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    
function enablebtnPurchase(){
    
    $('#btn_Purchase').prop('disabled', false);
    }
    
function disablebtnPurchase() {
    
    $('#btn_Purchase').prop('disabled', true);
    }