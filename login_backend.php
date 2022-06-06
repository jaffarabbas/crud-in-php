<?php 

include("connection.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

        $result = mysqli_query($connection, $query);

        if($email == "" || $password == ""){
            echo "<script>alert('Please fill all the fields');
            window.location.href='login.php';
            </script>";
        }else{
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $password) {
                    $_SESSION['user'] = $row['email'];
                    echo "<script>alert('Login Successfully');
                    window.location.href='dashboard.php';
                    </script>";
                }
            }else{
                echo "<script>alert('No user');
                window.location.href='login.php';
                </script>";
            }
        }
    }
}


?>