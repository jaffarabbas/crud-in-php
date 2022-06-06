<?php include("header.php") ?>
<?php 
if(isset($_SESSION['user']) && $_SESSION['user'] != ""){
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          
        </div>
    </div>
</div>
<?php } else{
    header("Location: login.php");
} ?>
<?php include("footer.php") ?>