<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $conn = new mysqli('localhost','root','','new_society');
    if($conn->connect_error){
        die('Connection Faild : '.$conn->connect_error);    
    }
    else{
        $stmt=$conn->prepare("insert into registration(username,email,password,confirm_password) values(?,?,?,?)" );
        if($password==$confirm_password){
            $stmt->bind_param("ssss",$username,$email,$password,$confirm_password);
            $stmt->execute();
            header("Location: login.html"); die();
            echo "<script> alert(' Kayıt oluşturuldu')</script>";
            $stmt->close();
            $conn->close();
        }
        else{
            echo "<script> alert(' Please enter same password')</script>";
            header("Location: registration.html"); die();
            
        }
        
        
        

    }
    



    
?>