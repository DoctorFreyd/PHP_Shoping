<?php require_once "header.php" ?>
<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header("Location:index.php");
    }
?>
<div>
    <h1 class="text-white text-center">Login</h1>
    <div class="container d-flex justify-content-center">
        <div class="w-25 bg-secondary p-2 m-2">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mt-2" id="login">Login</button>
                <a class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/register.php?action=register">Registretion</a>
                <a  class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/?action=home"><i class="bi bi-box-arrow-left">Home</i></a>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>
<script type="text/javascript" src="../JS/login.js"></script>