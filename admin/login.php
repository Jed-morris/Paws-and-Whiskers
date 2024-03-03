<?php
    require_once __DIR__."/../model/admin.php";
    if (isset($_SESSION["id"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.10/datatables.min.css" rel="stylesheet">
</head>
    <body>
        <h2>Login</h2>
        <form autocomplete="off" action="" method="post">
            <input type="hidden" id="action" value="login">
            <label for="">Username</label>
            <input type="text" id="username" value=""> <br>
            <label for="">Password</label>
            <input type="password" id="password" value=""> <br>
            <button type="button" onclick="submitData();">Login</button>
        </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src=".././js/admin.js"></script>
</html> 