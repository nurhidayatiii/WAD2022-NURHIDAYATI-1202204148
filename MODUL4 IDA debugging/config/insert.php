

<?php
    include ('connector.php');
    // $id_mobil       = $_POST['id_mobil']; 
    $nama_mobil     = $_POST['nama_mobil'];
    $pemilik_mobil  = $_POST['pemilik_mobil'];
    $merk_mobil     = $_POST['merk_mobil'];
    $tanggal_beli   = $_POST['tanggal_beli'];
    $deskripsi      = $_POST['deskripsi'];
    $foto_mobil     = $_FILES['foto_mobil']['name'];
    $status_pembayaran    = $_POST['status_bayar'];

    $foto_mobil = rand(1000,10000)."-".$_FILES['foto_mobil']['name'];
    move_uploaded_file ($_FILES['foto_mobil']['tmp_name'], "images/".$foto_mobil);

    // if ($_POST['simpan'] == "Simpan") {
    //     $status_pembayaran    = $_POST['status_bayar'];
    

    $query= mysqli_query($connect, "INSERT INTO showroom_ida_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
                                                        VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')");

    if ($query) {
        echo "<script> alert ('DATA BERHASIL DITAMBAHKAN')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Ida.php'>";
    } else{
        echo "<script> alert ('data TIDAK BERHASIL ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-Ida.php'>";
    }
    // }

?>