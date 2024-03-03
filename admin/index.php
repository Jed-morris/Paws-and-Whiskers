<?php include('header.php'); ?>
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="card-container" id="main">
        </div>
        <div class="card-container" id="dealers">
        <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Data Table Dealers
                            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addDealerModal">Add Dealer</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Dealer Name</th>
                                            <th>Logo</th>
                                            <th>Website</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dealerTableBody">
                                        <!-- Dealer list will be loaded here -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Dealer Name</th>
                                            <th>Logo</th>
                                            <th>Website</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container" id="categories"> Categories </div>
        <div class="card-container" id="inventory">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Data Table Inventory
                            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addStockModal">Add Stocks</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Purchase Qty</th>
                                            <th>Purchase Cost</th>
                                            <th>Total Purchase</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="inventoryTableBody">
                                        <!-- Inventory list will be loaded here -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Purchase Qty</th>
                                            <th>Purchase Cost</th>
                                            <th>Total Purchase</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container" id="products">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Data Table Products
                            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Products</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Logo</th>
                                            <th>Category</th>
                                            <th>Dealer</th>
                                            <th>Purchase Cost</th>
                                            <th>Sales Price</th>
                                            <th>Net Income</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="productTableBody">
                                        <!-- Product list will be loaded here -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Logo</th>
                                            <th>Category</th>
                                            <th>Dealer</th>
                                            <th>Purchase Cost</th>
                                            <th>Sales Price</th>
                                            <th>Net Income</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('modals.php'); ?>
<?php include('footer.php'); ?>