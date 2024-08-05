<?php
    $name=filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email=filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $password=filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    if(mb_strlen($name)<3 || mb_strlen($name)>90){
        echo "Check name";
        exit();
    }
    if(mb_strlen($password)<3 || mb_strlen($password)>90){
        echo "Check password";
        exit();
    }
    if(mb_strlen($email)<3 || mb_strlen($email)>90){
        echo "Check Email";
        exit();
    }

    $password = md5($password."sfsdfs");
    $mysql=new mysqli('localhost','root','root','register-site');
    $mysql->query("INSERT INTO `users` (`login`,`password`,`email`)    
     VALUES('$login','$password','$email')");
     $mysql->close();
    

     header('Location: ..//Frontend/index.html')
?>