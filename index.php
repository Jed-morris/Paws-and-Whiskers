<?php include('header.php')?>
<div class="item-list position-absolute">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="jumbotron text-center card-container" id="main">
                    <div class="col-md-12 mt-5">
                        <h1><span>Paw</span>some goods for your <span>Furr Babies</span></h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero nesciunt vel animi iste et! Illo reprehenderit et alias facere? Voluptatibus cumque pariatur autem aliquam officiis molestias hic sapiente illum perferendis.</p>
                        <a href="#" class="btn btn-primary">Know more</a>
                    </div>
                </section>
                <section class="card-container" id="dry_dogfood"></section>
                <section class="card-container" id="wet_dogfood"></section>
                <section class="card-container" id="dry_catfood"></section>
                <section class="card-container" id="wet_dogfood"></section>
                <section class="card-container" id="login"><?php include('login.php'); ?></section>
            </div>
        </div>
    </div>
</div>
<div class="slider">
    <div class="shopping-cart">
        <div class="item-box">
            <div class="image">
                <img src="images/whikas.png" alt="">
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
            <!--<i class="fas fa-trash"></i>-->
        </div>
        <div class="btn w-100">
            <button class="btn btn-warning">Close</button>
            <button class="btn btn-success">Place Order</button>
        </div>
    </div>
</div>
<?php include('footer.php')?>