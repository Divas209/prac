<?php

    session_start();
    require_once './conn.php';
    $password = $_POST['password'];
    // $password = md5($password);
    $name =  $_POST['name'];
    $sql = "SELECT * FROM user WHERE '$name' = 'name' and '$password' = 'password'";
    $res = mysqli_query($connect, $sql);
    if ($res == false){
        echo "error singin request";
    }
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            $_SESSION['user'] = $row['id'];
        }   
        
        header("location: main/index.php");
    }
    else{
        echo "ree"; 
        header("location: index.php");
    } 


?>