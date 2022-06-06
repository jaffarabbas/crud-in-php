<?php include("header.php") ?>
<?php
if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
    include("connection.php");
    $sql = "SELECT * FROM `products` WHERE `status`=1";
    $result = mysqli_query($connection, $sql);
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo $row['image'] ?>" alt="" class="img-fluid">
                                    <h4 class="text-center"><?php echo $row['name'] ?></h4>
                                    <p class="text-center"><?php echo $row['price'] ?></p>
                                    <p class="text-center"><?php echo $row['quantity'] ?></p>
                                    <a href="update_products.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a>
                                    <a href="delete_products.php?id=<?php echo $row['id'] ?>" class="ml-5 btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                </div>
            </div>
        </div>
    <?php } else {
    header("Location: login.php");
} ?>
    <?php include("footer.php") ?>