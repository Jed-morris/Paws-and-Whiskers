let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

//document.querySelector('#menu-btn').onclick = () =>{
//navbar.classList.toggle('active');
//searchForm.classList.remove('active');
//shoppingCart.classList.remove('active');
//loginForm.classList.remove('active');
//}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    
    
}

$(document).ready(function () {
    loadStocks();
    // Function to view products in Homepage
    function loadStocks() {
        $.ajax({
            type: 'GET',
            url: '././model/dry_dogfood.php',
            success: function (response) {
                var stocks = JSON.parse(response);
                var rows = '';
                stocks.forEach(function (stock) {
                    rows += '<div class="card m-2">';
                    rows += '<img class="card-img-top" src="./img/' + stock.image_dir + '"/>';
                    rows += '<div class="card-body">';
                    rows += '<b>' + stock.name + '</b>';
                    rows += '<p>Php '+ stock.sales_price +'.00</p>';
                    rows += '<button class="btn btn-primary">Add to cart</button>';
                    rows += '</div>';
                    rows += '</div>';
                });
                $('#dry_dogfood').html(rows);
            }
        });
        $.ajax({
            type: 'GET',
            url: '././model/wet_dogfood.php',
            success: function (response) {
                var stocks = JSON.parse(response);
                console.log(response);
                var rows = '';
                stocks.forEach(function (stock) {
                    rows += '<div class="card m-2">';
                    rows += '<img class="card-img-top" src="./img/' + stock.image_dir + '"/>';
                    rows += '<div class="card-body">';
                    rows += '<b>' + stock.name + '</b>';
                    rows += '<p>Php '+ stock.sales_price +'.00</p>';
                    rows += '<button class="btn btn-primary">Add to cart</button>';
                    rows += '</div>';
                    rows += '</div>';
                });
                $('#wet_dogfood').html(rows);
            }
        });
    }
});