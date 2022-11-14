var isValid = true;

//check all requirements
function submited() {
    ValidateEmail(document.getElementById("username").value);
    ValidatePassword(document.getElementById("password").value);
    getRadioValue();
    ValidateItems("demoInput");
    ValidateItems("demoInput1");
    ValidateItems("demoInput2");
    ValidateShipping(shipping_option);
    return isValid;

}

//reset the page
function reset_page() {
  document.getElementById("myForm").reset();  
}

//get the shipping option
function getRadioValue() {
  shipping_option = "empty";

  try {
  var ele = document.getElementsByName('shipping_option'); 
    
  for(i = 0; i < ele.length; i++) {
      if(ele[i].checked)
      shipping_option = ele[i].value;
    }
  }

  catch(e){
    shipping_option = "empty";
  }
}

//validate email
function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
    }else{
      alert("The email entered is not valid")
      isValid = false;
    }
  }

//validate passowrd
function ValidatePassword(password) {
    if(password.length == 0){
        alert("The Password entered is not valid")
        isValid = false;
    }
}

//validate shipping
function ValidateShipping(option)
{
    if((option != "seven_day") && (option !=  "over_night") && (option != "three_day")) {
        alert("Please select a shipping option")
        isValid = false;
    }
}

//validate selected items
function ValidateItems(Item) {

  var ele = document.getElementById(Item).value; 
  var name = document.getElementById(Item).name;

  if (ele.length == 0){
    alert(`Please input a number for ${name}`)
    isValid = false;
  }
}

