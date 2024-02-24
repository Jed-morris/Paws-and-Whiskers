<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers - High Quality Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-body-tertiary">
    <header class="h-auto">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" onclick="openMenu('main', 'this', 'main')" id="defaultOpen"><i class="fa-solid fa-paw"></i> Paws and Whiskers <i class="fa-solid fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Foods</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('dry_dogfood', 'this', 'red')" id="defaultOpen">Dry Dog Food</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('wet_dogfood', 'this', 'green')">Wet Dog Food</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('dry_catfood', 'this', 'blue')">Dry Cat Food</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('wet_catfood', 'this', 'orange')">Wet Cat Food</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Treats</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('dog_treats', 'this', 'red')">Dog Treats</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('cat_treats', 'this', 'green')">Cat Treats</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Potty and Litter</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('potty_dogs', 'this', 'red')">Potty Training Pads</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('cat_Litter', 'this', 'green')">Cat Litter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Health & Wellness</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('vit_supplement', 'this', 'red')">Vitamins & Supplements</a></li>
                                <li><a class="dropdown-item text-light" type="button" onclick="openMenu('treatment', 'this', 'green')">Skin & Coat Treatment</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-icons text-light">
                    <div class="fas fa-search ms-3" id="search-btn"></div>
                    <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                    <div class="fas fa-user ms-3" id="login-btn"></div>
                </div>
            </div>
        </nav>
    </header>
    <section class="menu-panel position-absolute" id="jumbotron">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-container" id="dry_dogfood"></div>
                    <div class="card-container" id="wet_dogfood"></div>
                    <div class="card-container" id="dry_catfood"></div>
                    <div class="card-container" id="wet_catfood"></div>
                </div>
            </row>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="110063563909634"></div>
        <script type="text/javascript">
            (function() {
                var sa = document.createElement('script');
                sa.type = 'text/javascript';
                sa.async = true;
                sa.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.ywxi.net/js/1.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(sa, s);
            }
            )();
        </script>

    <script>
        function openMenu(menuName) {
            var i, cardContainer, navLinks;
            cardContainer = document.getElementsByClassName("card-container");
            for (i = 0; i < cardContainer.length; i++) {
                cardContainer[i].style.display = "none";
            }
            document.getElementById(menuName).style.display = "grid";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script src="js/index.js"></script>
    
</body>
</html>
