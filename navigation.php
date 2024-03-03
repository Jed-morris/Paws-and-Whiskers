<header class="h-auto">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" onclick="openItems('main', 'this', 'main')" id="defaultOpen"><i class="fa-solid fa-paw"></i> Paws and Whiskers <i class="fa-solid fa-cat"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Foods</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('dry_dogfood', 'this', 'dry_dogfood')">Dry Dog Food</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('wet_dogfood', 'this', 'wet_dogfood')">Wet Dog Food</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('dry_catfood', 'this', 'dry_catfood')">Dry Cat Food</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('wet_catfood', 'this', 'wet_catfood')">Wet Cat Food</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pet Treats</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('dog_treats', 'this', 'dog_treats')">Dog Treats</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('cat_treats', 'this', 'cat_treats')">Cat Treats</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Potty and Litter</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('potty_dogs', 'this', 'potty_dogs')">Potty Training Pads</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('cat_Litter', 'this', 'cat_Litter')">Cat Litter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Health & Wellness</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('vit_supplement', 'this', 'vit_supplement')">Vitamins & Supplements</a></li>
                            <li><a class="dropdown-item text-light" type="button" onclick="openItems('treatment', 'this', 'treatment')">Skin & Coat Treatment</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-icons text-light">
                <div class="fas fa-search ms-3" id="search-btn"></div>
                <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                <span>0</span>
                <div class="fas fa-user ms-3" id="login-btn" onclick="openItems('login', 'this', 'login')"></div>
            </div>
        </div>
    </nav>
</header>