<?php 

    $connect = mysqli_connect('localhost','root','YBoKQrZtMjiNMgQzhTnfaHcBynnogtCn','prac');
    if(!$connect){
        echo "error database";
        die('error');
    }
