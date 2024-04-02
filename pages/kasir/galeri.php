<?php
session_start();
require_once('../../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION ['loggedin'] !== true) {
    header ('Locatton: ../Index-php'); 
    exit;
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Manage | Cashier</title>
    <link rel="icon" href="../../assets/images/biunic.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/style/manage_product.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <img src="../../assets/images/biunic.png" alt="ocean" width="50" height="30" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="../../pages/dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="">Manage</a>
        <a class="nav-link" href="galeri.php    ">Galery</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

    <div class="header">
        <h1>Hello, <?php echo htmlspecialchars($_SESSION['nama']); ?>! Welcome to Galery Biunic!
</h1>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../assets/images/1.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../assets/images/2.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../assets/images/3.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../../assets/images/4.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="width: 18rem;">
  <img src="../../assets/images/1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../../assets/images/2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../../assets/images/3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../../assets/images/4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"></p>
  </div>
</div>

</table>
</body>
</html>
