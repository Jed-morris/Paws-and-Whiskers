<?php
session_start();

if (isset ($_POST['uname']) &&
    isset ($_POST['pass'])) {
       
        include "db_conn1.php";
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
    }

    //for the database

    $data = "uname=" .$uname;

    if (empty($uname)) {
        $em = "Username is required";
        header("Location:login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "password is required";
        header("Location:login.php?error=$em&$data");
        exit;
    } else {
        $sql = "SELECT * FROM users2 WHERE Username= ?";
        $stmt =  $conn->prepare($sql);
        $stmt->execute([$uname]);

        //bibilangin yung row kung nasaan yung user na mag lalalogin then ifefetch
        if($stmt->rowCount()== 1){
            
            $user = $stmt->fetch();

            $username = $user['username'];            
            $password = $user['password'];
            $email = $user['email'];
            $id = $user ['id'];

            // mga error pag hindi nakapag input ng kailangang data
            if($username === $uname) {
                if (password_verify($pass, $password)) {
                $_SESSION ['ID'] = $id;
                $_SESSION ['Email'] = $email;
                header("location: user_dashboard.php");
                exit;
        } else {
                $em ="incorrect username or password";
                header("Location: login.php?error=$em&$data");
                exit;
        }
    }

}
    }

?>