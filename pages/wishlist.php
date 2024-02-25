<?php require_once "header.php" ?>
<?php
    session_start();
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        header("Location:auth.php");
    }
?>
<div>
    <h1 class="text-white text-center"> WishList</h1>
</div>

<?php require_once "footer.php" ?>