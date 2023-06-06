<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="for">
        <form id="XFORM">
            <h1 class="reg"> Registration Form </h1>
            <img class="avatar" src="avatar.png">
            <div class="card">
                <h class="first"><b>Profile Name</b></h> 
                <input class="put1" id="DigitField1" type= "text"> <br>
                <h class="e"><b>E-Mail</b></h>
                <input class="put3" id="DigitField2" type="text"> <br>
                <h class="pass"><b>Password</b></h>
                <input class="put4" id="DigitField3" type="password"> <br>
                <h class="con"><b>Confirm Password</b></h>
                <input class="put5" id="DigitField4" type="text"> <br>
                <h class="gender"><b>Gender</b></h>
                <input class="put7" id="DigitField5" type="text"> <br> 
            </div>
        </form>
        <h2 id="Resultfield"></h2>
        <a href="home.html">
            <input class="button" type="submit" value="Sign Up">
        </a>
        </div>
        <script src="form.js"></script>
</body>
</html>