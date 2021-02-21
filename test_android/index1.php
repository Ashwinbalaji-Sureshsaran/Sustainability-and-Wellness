<?php
    
    require_once 'user1.php';
    
    $username = "";
    
    $password = "";
    
    $email = "";
    
     $username1 = "";
    
    $password1 = "";
    
    $email1 = "";
    
    if(isset($_POST['username'])){
        
        $username = $_POST['username'];
        
    }
    
    if(isset($_POST['password'])){
        
        $password = $_POST['password'];
        
    }
    
    if(isset($_POST['email'])){
        
        $email = $_POST['email'];
        
    }
    
    $username1 = $_POST['username1'];
    
    $password1 = $_POST['password1'];
    
    $email1 = $_POST['email1'];
    
    
    $username2 = $_POST['username2'];
    
    $password2 = $_POST['password2'];
    
    $email2 = $_POST['email2'];
    
    
     $username3 = $_POST['username3'];
    
    $password3 = $_POST['password3'];
    
    $userObject = new User();
    
    // Registration
    
    if(!empty($username) && !empty($password) && !empty($email)){
        
        $hashed_password = ($password);
        
        $json_registration = $userObject->createNewRegisterUser($username, $hashed_password, $email,$username1, $password1, $email1,$username2, $password2, $email2,$username3, $password3);
        
        echo json_encode($json_registration);
        
    }
    
    // Login
    
    if(!empty($username) && !empty($password) && empty($email)){
        
        $hashed_password = md5($password);
        
        $json_array = $userObject->loginUsers($username, $hashed_password);
        
        echo json_encode($json_array);
    }
    ?>