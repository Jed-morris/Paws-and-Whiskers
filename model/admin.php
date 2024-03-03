<?php
    session_start();
    $conn = mysqli_connect("127.0.0.1:3306", "u507360145_root_mymp3", "mymp3_rootPass", "u507360145_mymp3_db");
    // IF
    if(isset($_POST["action"])){
        if($_POST["action"] == "login"){
            login();
        }
    }

// LOGIN
function login(){
    global $conn;

    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($user) > 0){
        $row = mysqli_fetch_assoc($user);
        if(password_verify($password, $row['password'])){
            echo "Login Successful";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
        }
        else{
            echo "Wrong Password";
            exit;
        }
        }else {
            echo "User Not Registered";
            exit;
        }
    }
?>
