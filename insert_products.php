<?php include("header.php") ?>
<?php
if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="text-center">Insert Products</h1>
                        <form action="insert_product_backend.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" placeholder="Product Name" class="form-control"><br>
                            <input type="text" name="description" placeholder="Product Description" class="form-control"><br>
                            <input type="text" name="price" placeholder="Product Price" class="form-control"><br>
                            <input type="text" name="quantity" placeholder="Product Quantity" class="form-control"><br>
                            <input type="file" name="image" class="form-control"><br>
                            <input type="submit" name="submit" value="Insert" class="form-control btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    header("Location: login.php");
} ?>
<?php include("footer.php") ?>