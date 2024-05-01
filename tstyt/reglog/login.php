<?php
 require_once('db.php');

 $login = $_POST['login'];
 $pass = $_POST['pass'];

 if(empty($login) || epmty($pass))
 {
    echo "complete all the tables";

 } else {
    $sql = "SELECT * FROM 'users' WHERE login = '$login' AND pass ='$pass'";
    $result = $conn->query($sql);

    if($result->num_rows >0)
    {
        while($row = $result->fetch_assoc()) {
            echo "Welcome!" . $row['login'];
        }
    } else{
        echo "no such user exists";
    }
 }