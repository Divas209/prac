<?php

    session_start();
    require_once './conn.php';
    $password = $_POST['password'];
    // $password = md5($password);
    $name =  $_POST['name'];
    $sql = "SELECT * FROM `user` WHERE `name` = '$name' and  `password` ='$password'";
    $res = mysqli_query($connect, $sql);
    $res1 = mysqli_query($connect, $sql);
    if ($res == false){
        echo "error singin request";
    }
    if ($key1 = mysqli_fetch_assoc($res)>0){
        while ($key2 = mysqli_fetch_array($res1)) {
            echo 'var'.$key2['id'];
            $_SESSION['user'] = $key2['id'];
        }
        header('Location: main/index.php');

    }else{
        header('Location: index.php'); 
    }
    


?>