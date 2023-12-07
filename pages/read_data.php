<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/data_read_styles.css">
</head>
<body>
    <div class="header">
    <a href="../index.php" ><img src="../asset/home.png" alt="Home" style="width:30px;height:30px;"></a>
    <h1>List Pemesanan</h1>
    </div>
    
    <div class="content">
    <?php
    include '../koneksi.php';

    $sql = "SELECT * FROM table_pembelian";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      echo '<table>';
      echo '<tr class="field_name">';
      echo '<th>Nama Produk</th>';
      echo '<th>Jumlah Produk</th>';
      echo '<th>Alamat</th>';
      echo '<th>No. Telp</th>';
      echo '<th class="edge"></th>';
      echo '</tr>';
      while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<th>" . $row["NAMA_PRODUK"]. 
            "</th><th>" . $row["JUMLAH_PRODUK"]. 
            "</th><th>" . $row["ALAMAT"]. 
            "</th><th>" . $row["NO_TELP"]. "</th>";
        echo '<th class="edge">';
        echo '<form action="../action/action_delete.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row["ID"]. '">';
        echo '<input type="submit" value="Delete">';
        echo '</form>';
        echo '<form action="update_data.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row["ID"]. '">';
        echo '<input type="hidden" name="nama_produk" value="' . $row["NAMA_PRODUK"]. '">';
        echo '<input type="hidden" name="jumlah_produk" value="' . $row["JUMLAH_PRODUK"]. '">';
        echo '<input type="hidden" name="alamat" value="' . $row["ALAMAT"]. '">';
        echo '<input type="hidden" name="no_telp" value="' . $row["NO_TELP"]. '">';
        echo '<input type="submit" value="Update">';
        echo '</form>';
        echo '</th>';
        echo '</tr>';
      }
    } else {
      echo '<br>';
      echo '<h2>Belum ada pemesanan</h2>';
      echo '<br>';
    }
    ?>
    </table>
    </div>

</body>
</html>
