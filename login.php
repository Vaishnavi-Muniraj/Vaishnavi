<?php

 $con=mysqli_connect("localhost","root","","project");
//  if(!$con)
// {
//     die('connection failed');
// } 
// if(issue($_POST['submit']))

// {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];

    $sql_query = "insert into register(email,firstname,lastname,password,conpassword) values('$email','$firstname','$lastname','$password','$conpassword');";
 
    $r =mysqli_query($con,$sql_query);

    if($r)
    {
        echo "success";
    }
    else{
        echo "failure";
    }
     
    // mysqli_close($con)
// }

?>