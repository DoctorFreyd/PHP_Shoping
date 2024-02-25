
<!-- Links -->
<link rel="stylesheet" type="text/css" href="../CSS/layout.css">
<!-- HTML -->
<header>
<nav class="navbar navbar-expand-lg" id="nav" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="http://localhost/shoping/pages/auth.php?action=auth"><i class="bi bi-person-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active text-dark" href="http://localhost/shoping/pages?action=home">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="http://localhost/shoping/pages/addproduct.php?action=addprod">AddProduct</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="http://localhost/shoping/pages/wishlist.php?action=wishlist">Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="http://localhost/shoping/pages/shopingcart.php?action=shopingcart">Shopping Cart</a>
        </li>
        <?php
        session_start();
        if(isset($_SESSION['user'])){
          echo '<li class="nav-item">
            <a class="nav-link text-dark" id="logout"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-door-closed-fill" viewBox="2 2 16 16">
    <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
  </svg></a>
          </li> ';
        }
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
<script type="text/javascript" src="../JS/layout.js"></script>