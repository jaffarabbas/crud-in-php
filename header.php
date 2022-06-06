
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Auth</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
    ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert_products.php">Insert Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_products.php">Show Products</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="logout.php" method="POST">
                    <label class="mr-2" for="logout"><?php echo $_SESSION['user']  ?></label>
                    <input type="submit" class="btn btn-primary ml-1" name="logout" value="Logout" /><br>
                </form>
            </div>
        </nav>
    <?php } ?>
    <h1 class="text-center p-5">Crud Practice</h1>