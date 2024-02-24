<?php
session_start();

if (isset ($_POST['adminusername']) &&
    isset ($_POST['adminpassword'])) {
       
        include "db_conn1.php";
        $adminusername = $_POST['adminusername'];
        $adminpassword = $_POST['adminpassword'];
    
    }
         //for the database
         $data = "adminusername" .$adminusername;


    // Validation to check if username and password are not empty
    if (empty($adminusername)) {
        $em = "Username is required";
        header("Location:admin_login.php?error=$em&$data");
        exit;
    } else if (empty($adminpassword)) {
        $em = "password is required";
        header("Location:admin_login.php?error=$em&$data");
        exit;
    } else {
    $sql = "SELECT * FROM admin WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$adminusername]);

    //bibilangin yung row kung nasaan yung user na mag lalalogin then ifefetch
    if($stmt->rowCount()== 1){
            
        $user = $stmt->fetch();

        $username = $user['username'];            
        $password = $user['password'];
        $id = $user['id'];

        // mga error pag hindi nakapag input ng kailangang data
        if($username === $adminusername) {
            if (password_verify($adminpassword, $password)) {
                $_SESSION ['ID'] = $id;
                header("location: admin_dashboard2.php");
                exit;
            }else {
            $em ="incorrect username or password";
            header("Location: admin.php?error=$em&$data");
            print_r ($em + $data);
            exit;
            }
        }

    }
}

?>
