<?php 
include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image'];
        //image working
        $finalImage = str_replace(' ','-',basename($image['name']));
        $imagePath = "images/".basename($finalImage);
        move_uploaded_file($image['tmp_name'], $imagePath);
        //sql query
        $sql = "UPDATE `products` SET `name`='$name',`description`='$description',`price`='$price',`quantity`='$quantity',`image`='$imagePath' WHERE `id`='$id'";
        $result = mysqli_query($connection,$sql);
        if ($result) {
            echo "<script>alert('Product Updated successfully');
            window.location.href='view_products.php';
            </script>";
        }else{
            echo "<script>alert('Product not Updated')
            window.location.href='view_products.php';
            </script>";
        }
    }
}
