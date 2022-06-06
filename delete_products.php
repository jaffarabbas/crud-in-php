<?php 

include("connection.php");

$id = $_GET['id'];
$sql = "UPDATE `products` SET `status`=0 WHERE `id`=$id";
$result = mysqli_query($connection,$sql);
if ($result) {
    echo "<script>alert('Product deleted successfully');
    window.location.href='view_products.php';
    </script>";
}else{
    echo "<script>alert('Product not deleted')
    window.location.href='view_products.php';
    </script>";
}
?>