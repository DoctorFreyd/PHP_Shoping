<?php require_once "header.php" ?>
<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header("Location:index.php");
    }
?>
<div>
    <h1 class="text-white text-center">Registertion</h1>
    <div class="container d-flex justify-content-center">
        <div class="w-25 bg-secondary p-2 m-2">
        <!-- <form class="w-25 bg-secondary p-2 m-2" action> -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
                <p id="output_name" class="text-danger"></p>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <p id="output_email" class="text-danger"></p>
            </div>
            <div class="form-group">
                <label for="passwordinp">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <p id="output_password" class="text-danger"></p>
            </div>
            <div class="form-group">
                <label for="cpasswordinp">Please write again</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Password">
                <p id="output_cpass" class="text-danger"></p>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mt-2" id="register">Registretion</button>
                <a class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/auth.php?action=auth">Login</a>
                <a  class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/?action=home"><i class="bi bi-box-arrow-left">Home</i></a>
        <!-- </form> -->
        </div>
    </div>
    </div>
</div>
<?php require_once "footer.php" ?>
<script type="text/javascript" src="../JS/regist.js"></script>