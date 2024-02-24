<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
    <body class="bg-dark">
    <!-- Auth Page -->
<div>
    <h1 class="text-white text-center">Auth Page</h1>
    <div class="container d-flex justify-content-center">
        <form class="w-25 bg-secondary p-2 m-2">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mt-2">Login</button>
                <a class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/register.php?action=register">Registretion</a>
                <a  class="nav-link text-dark mt-2" href="http://localhost/shoping/pages/?action=home"><i class="bi bi-box-arrow-left">Home</i></a>
            </div>
        </form>
    </div>
</div>
<?php require_once "footer.php" ?>
<script type="text/javascript" src="../JS/auth.js"></script>