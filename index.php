<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers- Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">    
    <link rel="stylesheet" href="styles.css">

</head>
<body class="bg-body-tertiary">
    <header class="h-auto">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" href="#"><i class="fa-solid fa-paw"></i> Paws and Whiskers <i class="fa-solid fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Foods</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" href="#">Dry Dog Food</a></li>
                                <li><a class="dropdown-item text-light" href="#">Wet Dog Food</a></li>
                                <li><a class="dropdown-item text-light" href="#">Dry Cat Food</a></li>
                                <li><a class="dropdown-item text-light" href="#">Wet Cat Food</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Treats</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" href="#">Dog Treats</a></li>
                                <li><a class="dropdown-item text-light" href="#">Cat Treats</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Potty and Litter</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" href="#">Potty Training Pads</a></li>
                                <li><a class="dropdown-item text-light" href="#">Cat Litter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Health & Wellness</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-light" href="#">Vitamins & Supplements</a></li>
                                <li><a class="dropdown-item text-light" href="#">Skin & Coat Treatment</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-icons text-light">
                    <div class="fas fa-search ms-3" id="search-btn"></div>
                    <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                    <span>0</span>
                    <!-- Log-in, Sign-up & Admin Form Button -->
                    <div class="login-form">
                        <a href="login.php"><button class="bn14" id="login-btn">Login</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="home">
        <div class="container-1">
            <div class="row">
                <div class="card-container content" id="main">
                    <h3><span>Paw</span>some goods for your <span>Furr Babies</span></h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nesciunt vel animi iste et! 
                        Illo reprehenderit et alias facere? Voluptatibus cumque pariatur 
                        autem aliquam officiis molestias hic sapiente illum perferendis.</p>
                    <a href="#" class="btn" id="defaultOpen">Know more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-container" id="dry_dogfood"></div>
                <div class="card-container" id="wet_dogfood"></div>
                <div class="card-container" id="dry_catfood"></div>
                <div class="card-container" id="wet_catfood"></div>
            </div>
        </div>
        <div class="container-2">
            <div class="shopping-cart">
                <div class="item-box">
                    <div class="image">
                        <img src="img/cats2.png" alt="cats">
                    </div>
                    <div class="name">
                        <h3>Whiskas</h3>
                    </div>
                    <div class="totalPrice">
                        <span class="price">₱2300</span>
                    </div>
                    <div class="quantity">
                        <span class="minus"><</span>
                        <span>1</span>
                        <span class="plus">></span>
                    </div>
                </div>
                <div class="btn w-100">
                    <button class="btn btn-warning">Close</button>
                    <button class="btn btn-success">Place Order</button>
                </div>
            </div>
        </div>
    <div class="footer">
        <div class="footercontainer-1">
            <div class="content">
                <div class="social">
                    <a href="https://www.facebook.com/pawsandwhiskers12" class="facebook">
                        <i class="bx bxl-facebook-circle"></i>                                       
                    </a>
                    <a href="https://www.linkedin.com/" class="linkedin">
                        <i class="fab fa-linkedin-in"></i>                
                    </a>
                </div>
                <div class="links">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="footercontainer-2">
            <p>All rights reserved. <em>Paws and Whiskers.</em> 2024 </p>
        </div>
    </div>
</div>

    <button onclick="scrollToTop()" id="scrollToTopButton" title="Go to top">Up</button>

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

    <script> /*Facebook Messenger API*/
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
            })();
    </script>

    <script>
        function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="js/index.js"></script>

</body>
</html>
