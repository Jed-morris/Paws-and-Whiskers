<?php 
    require __DIR__."./../model/admin.php";
    if (isset($_SESSION["id"])) {
        # code...
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
    }else {
        header("Location: login.php");
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
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<!-- top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#" onclick="openMenu('main', 'this', 'main')" id="defaultOpen">Sales and Inventory System</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#" onclick="openMenu('products', 'this', 'products')">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="openMenu('inventory', 'this', 'inventory')" >Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="openMenu('dealers', 'this', 'dealers')" >Dealer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="openMenu('categories', 'this', 'categories')" >Category</a>
                        </li>
                    </ul>
                </div>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><?php echo $user["username"];?></a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- top navigation bar -->