// function myFunction() {
//     var txt;
//     if (confirm("You Have Successfully Signed up to our website")) {
//         txt = "You Pressed OK!";
//     } else {
//         txt = "You Pressed Cancel";
//     }
//     document.getElementById("demo").innerHTML = txt;
// }

var digitfield1 = document.getElementById("DigitField1");
var digitfield2 = document.getElementById("DigitField2");
var digitfield3 = document.getElementById("DigitField3");
var digitfield4 = document.getElementById("DigitField4");
var digitfield5 = document.getElementById("DigitField5");

var result = document.getElementById("Resultfield");
var form = document.getElementById("XFORM");

form.addEventListener ('submit', function() {
    if(!digitfield1.value || digitfield2.value || digitfield3.value || digitfield4.value || digitfield5.value) {
        alert('Please input your profile name')
    }else{
        alert('You have successfully Signed up to our website')
    }
    if(digitfield1.value || !digitfield2.value || digitfield3.value || digitfield4.value || digitfield5.value) {
        alert('Please input your E-Mail')
    }else{
        alert('You have successfully Signed up to our website')
    }
    if(digitfield1.value || digitfield2.value || !digitfield3.value || digitfield4.value || digitfield5.value) {
        alert('Please input your Password')
    }else{
        alert('You have successfully Signed up to our website')
    }
    if(digitfield1.value || digitfield2.value || digitfield3.value || !digitfield4.value || digitfield5.value) {
        alert('Please input your Confirm Password')
    }else{
        alert('You have successfully Signed up to our website')
    }
    if(!digitfield1.value || digitfield2.value || digitfield3.value || digitfield4.value || !digitfield5.value) {
        alert('Please input your Gender')
    }else{
        alert('You have successfully Signed up to our website')
    }})
    // if(!digitfield2.value) {
    //     alert('Please input your Email')
    // }else{
    //     alert('You have successfully Signed up to our website')
    // }
    // if(!digitfield3.value) {
    //     alert('Please input your Password')
    // }else{
    //     alert('You have successfully Signed up to our website')
    // }
    // if(!digitfield4.value) {
    //     alert('Please input your Confirm Password')
    // }else{
    //     alert('You have successfully Signed up to our website')
    // }
    // if(!digitfield5.value) {
    //     alert('Please input your Gender')
    // }else{
    //     alert('You have successfully Signed up to our website')
    // }
