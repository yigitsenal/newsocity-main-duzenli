<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
 

    $conn = new mysqli('localhost','root','','new_society');
    if($conn->connect_error){
        die('Connection Faild : '.$conn->connect_error);    
    }
    else{
        $stmt=$conn->prepare("select * from registration where username = ?" );
        
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                echo "<script> alert(' giriş başarılı')</script>";
            }
            else{
                echo "<h2>kullanıcı adı veya şifre hatalı</h2>";
            }
        }else{
            echo "<h2>kullanıcı adı veya şifre hatalı</h2>";
        }
        
        
       
        //header("Location: registration.html"); die();
            
        
        
        
        // header("Location: login.html"); die();
        // echo "<script> alert(' Kayıt oluşturuldu')</script>";

    }
    



    
?>