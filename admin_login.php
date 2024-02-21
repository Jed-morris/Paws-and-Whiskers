<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db_connAdmin.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users3 WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
        $stored_password = $user['password'];

        if (password_verify($password, $stored_password)) {
            $_SESSION['ID'] = $user['id'];
            $_SESSION['username'] = $username;
            $_SESSION['admin_logged_in'] = true;
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error = "Incorrect password";
        }
    } else {
        $error = "Username not found";
    }

    header("Location: admin.php?error=$error");
    exit();
}

?>

