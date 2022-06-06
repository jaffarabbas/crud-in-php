<?php include("header.php") ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Register</h1>
                </div>
                <div class="card-body text-center">
                    <form action="register_backend.php" method="POST">
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>
                        <input type="email" class="form-control" name="email" placeholder="email"><br>
                        <input type="password" class="form-control" name="password" placeholder="password"><br>
                        <input type="submit" class="btn btn-primary" name="register" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ?>