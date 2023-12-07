<?php
include '../koneksi.php';
$ID = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="../CSS/data_input_styles.css">
</head>
<body>
    <div class="header">
        <a href="../index.php" ><img src="../asset/home.png" alt="Home" style="width:30px;height:30px;"></a>
        <a href="read_data.php" ><img src="../asset/back.png" alt="Home" style="width:30px;height:30px;"></a>
        <h1>Update Data</h1>
    </div>
    <main>
        <form action="../action/action_update.php" method="post">
        <div class="content">
            <h3> Nama Produk </h3>
            <select name="nama_produk" id="nama_produk" required>
            <?php
            if ($nama_produk == "Nitroglycerin 250ml") {
                echo '<option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>';
                echo '<option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>';
                echo '<option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>';
                echo '<option value="Sapu">Sapu</option>';
              } elseif ($nama_produk == "Hyundai - 5,000 lbs Pneumatic Forklift") {
                echo '<option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>';
                echo '<option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>';
                echo '<option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>';
                echo '<option value="Sapu">Sapu</option>';
              } elseif ($nama_produk == "Sarkofagus Tuntankhamun") {
                echo '<option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>';
                echo '<option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>';
                echo '<option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>';
                echo '<option value="Sapu">Sapu</option>';
              } elseif ($nama_produk == "Sapu") {
                echo '<option value="Sapu">Sapu</option>';
                echo '<option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>';
                echo '<option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>';
                echo '<option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>';
              } else {
                echo '<option value="">Select Product</option>';
                echo '<option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>';
                echo '<option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>';
                echo '<option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>';
                echo '<option value="Sapu">Sapu</option>';
              }
            ?>
            </select>
        </div>
        <div class="content">
            <h3> Jumlah produk </h3>
                <input type="number" id="jumlah_produk" name="jumlah_produk" min="1" max="100" placeholder="1-100" required
                value="<?php echo $jumlah_produk; ?>"/>
        </div>
        <div class="content">
            <h3> Alamat </h3>
                <textarea id="alamat" name="alamat" rows="4" cols="30" placeholder="Input Alamat" required><?php echo $alamat; ?></textarea>
        </div>
        <div class="content">
            <h3> No. Telp </h3>
                <input type="number" id="no_telp" name="no_telp" maxlength="15" placeholder="ex. 081512341234"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required
                value="<?php echo $no_telp; ?>">
            <br><br>
            <?php echo '<input type="hidden" name="id" value="' . $ID. '">';?>
            <input type="submit" value="Update" class="button"> 
        </div>
        <div class="content">
        </div>
    </form>
    </main>
</body>
</html>
