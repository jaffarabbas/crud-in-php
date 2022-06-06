<?php include("header.php") ?>
<?php
if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

    include("connection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE `id`=$id";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $image = $row['image'];
    }

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="text-center">Insert Products</h1>
                        <form action="update_products_backend.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input value="<?php echo $name ?>" type="text" name="name" placeholder="Product Name" class="form-control"><br>
                            <input value="<?php echo $description ?>" type="text" name="description" placeholder="Product Description" class="form-control"><br>
                            <input value="<?php echo $price ?>" type="text" name="price" placeholder="Product Price" class="form-control"><br>
                            <input value="<?php echo $quantity ?>" type="text" name="quantity" placeholder="Product Quantity" class="form-control"><br>
                            <input value="<?php echo $image ?>" type="file" name="image" class="form-control"><br>
                            <input type="submit" name="update" value="Update" class="form-control btn btn-primary">
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