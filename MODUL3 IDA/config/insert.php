

<?php
    include ('connector.php'); 
    $nama_mobil     = $_POST['nama_mobil'];
    $pemilik_mobil  = $_POST['pemilik_mobil'];
    $merk           = $_POST['nama_merk'];
    $tanggal_beli   = $_POST['tanggal_beli'];
    $deskripsi      = $_POST['deskripsi'];
    $foto           = $_POST['foto_mobil'];

    if ($_POST['simpan'] == "Simpan") {
        $status_pembayaran    = $_POST['status_bayar'];
    
    // $status_pembayaran    = $_POST['status_bayar'];

    $query= mysqli_query($connect, "INSERT INTO showroom_ida_table VALUES('','$nama_mobil','$pemilik_mobil','$merk','$tanggal_beli','$deskripsi','$foto','$status_pembayaran')");

    if ($query) {
        echo "<script> alert ('DATA BERHASIL DITAMBAHKAN')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Ida.php'>";
    } else{
        echo "<script> alert ('data TIDAK BERHASIL ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Ida.php'>";
    }
    }

?>