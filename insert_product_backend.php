<?php 
include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
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
        $sql = "INSERT INTO `products`(`name`, `description`, `price`, `quantity`, `image`) VALUES ('$name','$description','$price','$quantity','$imagePath')";
        $result = mysqli_query($connection,$sql);
        if ($result) {
            echo "<script>alert('Product added successfully');
            window.location.href='insert_products.php';
            </script>";
        }else{
            echo "<script>alert('Product not added')
            window.location.href='insert_products.php';
            </script>";
        }
    }
}
