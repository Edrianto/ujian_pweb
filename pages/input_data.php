<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="../CSS/data_input_styles.css">
</head>
<body>
    <div class="header">
        <a href="../index.php" ><img src="../asset/home.png" alt="Home" style="width:30px;height:30px;"></a>
        <h1>Input Data</h1>
    </div>
    <main>
        <form action="../action/action_input.php" method="post">
        <div class="content">
            <h3> Nama Produk </h3>
            <select name="nama_produk" id="nama_produk" required>
                <option value="">Select Product</option>
                <option value="Nitroglycerin 250ml">Nitroglycerin 250ml</option>
                <option value="Hyundai - 5,000 lbs Pneumatic Forklift">Hyundai - 5,000 lbs Pneumatic Forklift</option>
                <option value="Sarkofagus Tuntankhamun">Sarkofagus Tuntankhamun</option>
                <option value="Sapu">Sapu</option>
            </select>
        </div>
        <div class="content">
            <h3> Jumlah produk </h3>
                <input type="number" id="jumlah_produk" name="jumlah_produk" min="1" max="100" placeholder="1-100" required/>
        </div>
        <div class="content">
            <h3> Alamat </h3>
                <textarea id="alamat" name="alamat" rows="4" cols="30" placeholder="Input Alamat" required></textarea>
        </div>
        <div class="content">
            <h3> No. Telp </h3>
                <input type="number" id="no_telp" name="no_telp" maxlength="15" placeholder="ex. 081512341234"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                required>
            <br><br>
            <input type="submit" value="Submit" class="button"> 
        </div>
        <div class="content">
            
        </div>
    </form>
    </main>
</body>
</html>
