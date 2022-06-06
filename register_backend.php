<?php

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($name == "" || $email == "" || $password == "") {
            echo "<script>alert('Please fill all the fields');
            window.location.href='register.php';
            </script>";
        } else {
            $query = "SELECT * FROM `users` WHERE `email` = '$email'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) != 1) {
                $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

                $result = mysqli_query($connection, $query);

                if ($result) {
                    echo "<script>alert('Register Successfully');
                        window.location.href='login.php';
                      </script>";
                } else {
                    echo "<script>alert('Register Failed');
                        window.location.href='login.php';
                      </script>";
                }
            } else {
                echo "<script>alert('Email already exist');
                window.location.href='register.php';
                </script>";
            }
        }
    }
}
