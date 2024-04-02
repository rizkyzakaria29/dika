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
        <h1>Hello, <?php echo htmlspecialchars($_SESSION['nama']); ?>! Welcome to product management!
</h1>
</div>

<div class="form-container">
    <form action="../../db/DB_add_product.php" method="post">
        <label for="nama_produk">Produk Name:</label>
        <input type="text" name="nama_produk" required>
        <br>
        <label for="harga_produk">Product Price:</label> 
        <input type="number" name="harga_produk" required>
        <br>
        <label for="jumlah">Quantity</label>
        <input type="number" name="jumlah" required>
        <br>
        <button type="submit" name="add_product">Add Product</button>
    </form>
</đtv>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Terakhir Dt Updates</th>
    </tr>
<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['nama_produk']); ?></td>
        <td>Rp. <?php echo number_format($row['harga_produk']); ?></td>
        <td><?php echo number_format($row['jumlah']); ?> pcs</td>
        <td><?php echo date('d F Y H:i:s', strtotime($row['updated_at'])); ?></td>
        <td class="actton-buttons">
            <form action="./update_product.php" method="get">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button class="update-button" types="submit">Updates</button> 
            </form>
            <form action="../../db/DB_delete_product.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="delete-button" name="delete_product" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
            </form> 
            <form action="../../db/DB_process_checkout.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="checkout-button" name="checkout_product">Checkout</button>
            </form>
            <form action="./belanja.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="checkout-button" name="checkout_product">Belanja</button>
            </form>

</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
