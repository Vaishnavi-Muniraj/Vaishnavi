<?php
    
$email = $_POST['email'];
$password = $_POST['password'];

  
$con=mysqli_connect("localhost","root","","project");

if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}else{
    $stmt = $con->prepare("select * from register where email =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data  = $stmt_result->fetch_assoc();
        if($data['password'] ==$password) {
           
            echo "success";
        } else {
            echo "invalid password";
        }
    
   
    }else{
          
        echo "invaild email";
        
    }
}



?>