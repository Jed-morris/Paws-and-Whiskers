<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <title>Admin Page- Paws and Whiskers</title>

    <style>
        body {
    background-image: url('img/dogs2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    }

    .transparent-card {
    background-color: rgba(255, 255, 255, 0.7);
    }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card transparent-card">
                    <div class="card-body">
                    <a href="index.php" class="btn btn-light d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border-radius: 50%;"><i class="fas fa-home flex justify-content-center align-items-center"></i></a>
                        <h2 class="text-center">Admin Page</h2>
                        <hr>
                        <form action="admin_login.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="adminusername" value="<?php echo (isset($_GET['adminusername'])) ? $_GET['adminusername'] : "" ?>" placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="adminpassword" placeholder="Enter your password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Go back to User's Login-> <a href="login.php">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
