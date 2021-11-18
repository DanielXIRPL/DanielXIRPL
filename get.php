<form action="" method="get">

    nama :
    <input type="text" name="nama" required>
    alamat :
    <input type="text" name="alamat" required>
    
    <input type="submit" name="kirim" value="simpan">

</form>

<?php

    if (isset($_GET['kirim'])) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
    
        echo $nama;
        echo '<br>';
        echo $alamat;
    }


 ?>
