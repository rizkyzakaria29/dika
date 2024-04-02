<?php
session_start();
require_once('../../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../Index-php');
    exit;
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage | Cashier</title>
    <link rel="icon" href="../../assets/images/ocean.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style/manage_product.css">
</head>
<body>
<h2>Invoice Kasir</h2>
    <form method="post">
        <label for="barang">Pilih Barang:</label>
        <select name="barang[]" id="barang" multiple>
            <option value="B001">Barang 1 - Rp. 100.000</option>
            <option value="B002">Barang 2 - Rp. 150.000</option>
            <option value="B003">Barang 3 - Rp. 200.000</option>
            <!-- Tambahkan opsi barang lainnya sesuai kebutuhan -->
        </select>
        <input type="submit" name="submit" value="Tambahkan">
    </form>

    <?php
    // Daftar harga barang
    $harga_barang = array(
        "B001" => 100000,
        "B002" => 150000,
        "B003" => 200000,
        // tambahkan harga barang lainnya sesuai kebutuhan
    );

    if(isset($_POST['submit'])){
        if(isset($_POST['barang'])){
            echo "<h3>Invoice:</h3>";
            echo "<table>";
            echo "<tr><th>Barang</th><th>Harga</th></tr>";
            $total = 0;
            foreach($_POST['barang'] as $barang){
                echo "<tr><td>$barang</td><td>Rp. " . number_format($harga_barang[$barang], 2) . "</td></tr>";
                $total += $harga_barang[$barang];
            }
            echo "<tr><td><b>Total</b></td><td><b>Rp. " . number_format($total, 2) . "</b></td></tr>";
            echo "</table>";
        } else {
            echo "Silakan pilih barang terlebih dahulu.";
        }
    }
    ?>
</body>
</html>
