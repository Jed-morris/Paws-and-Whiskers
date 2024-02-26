<?php

if (isset($_POST['uname']) && //Used to determine whether a var is set or declared
    isset($_POST['email']) &&
    isset($_POST['pass'])) {
        
        include "db_conn1.php";
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    
    //for the database

    $data = "uname=" . $uname ."&email=" .$email;

    if (empty($uname)) {
        $em ="Username is required";
        header ("Location: signup.php?error=$em&$data");
        exit;    
    } else if (empty($email)) {
        $em ="Email is required";
        header ("Location: signup.php?error=$em&$data");
        exit;   
    } else if (empty($pass)) {
        $em ="Password is required";
        header ("Location: signup.php?error=$em&$data");
        exit;   
    } 

    // Check if the email is already in use
    $sql = "SELECT * FROM users WHERE Email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $em = "Email is already in use";
        header("Location: signup.php?error=$em");
        exit;
    }

        //Hashing password
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        // Insert user data into the database
        $sql = "INSERT INTO users(Username, Email, password)
                    VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname, $email, $pass]);

        header("Location: signup.php?succes=Your account has been created successfully");
        exit;
} else {
    header("Location: signup.php");
    exit;
}
    
?>
