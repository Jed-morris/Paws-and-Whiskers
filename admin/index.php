<?php include('header.php'); ?>
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="card-container" id="main">
            <div class="row">
            <div class="col-md-12 mb-4">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Primary Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Warning Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Success Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Danger Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
            </div>
        </div>
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