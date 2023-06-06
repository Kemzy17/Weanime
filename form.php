<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    
        <?php
 
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'pamilerin1';
        $conn = mysqli_connect("localhost", "root", "", "pamilerin1");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $Profile_Name =  $_REQUEST['Profile_name'];
        $E_Mail = $_REQUEST['last_name'];
        $password =  $_REQUEST['Password'];
        $Confirm_Password = $_REQUEST['Confirm_Password'];
        $Gender = $_REQUEST['Gender'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Registration Form  VALUES ('$Profile_name',
            '$E_mail','$Password','$Confirm_Password','$Gender')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";
 
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    
</body>
 
</html>
