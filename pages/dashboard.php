<?php 
session_start();
require_once('../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

$realName = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCEAN | Welcome Cashier!</title>
    <link rel="icon" href="./../assets/images/ocean.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/dashboard.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <img src="../assets/images/ocean.png" alt="ocean" width="30" height="24" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./kasir/manage_product.php">Manage</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

    <h1>Hello, <?php echo htmlspecialchars($realName); ?>! Welcome to the dashboard!</h1>


    <div class="dashboard-content">
        <h2>Dashboard</h2>
        <p>Welcome to the Ocean cashier dashboard. You can manage products and perform other tasks here.</p>
      </div>
      
      <footer>
      <div class="socials">
          <a href="https://www.instagram.com/rizkimaulha/"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
      </div>
      <div class="credit">
          <p>Created by <a href="#">Hakim</a>. | &copy; 2023.</p>
      </div>
  </footer>
    
    <form action="../db/DB_logout.php" method="post">
    <button type="submit" class="btn-logout">Log Out</button>
    </form>

</footer>
</body>
</html>
