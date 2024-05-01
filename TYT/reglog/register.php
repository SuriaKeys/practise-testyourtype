<?php
 require_once('db.php');
$login - $_POST['login'];
$pass - $_POST['pass'];
$repeatpass - $_POST['repeatpass'];
$email - $_POST['email'];
if(empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "complete all the tables";
} else 
{
    if($pass != $repeatpass){
        echo "Passwords do not match";

    } else{
        $sql - "INSERT INTO 'users' (login,pass,email) VALUES('$login', '$pass', '$email')";
        if($conn -> query($sql) == TRUE){
            echo "successful registration";
        }    
        else{
            echo "Error:" . $conn->error;
        }
            
        
    }
}
