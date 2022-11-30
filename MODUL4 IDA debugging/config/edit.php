<?php

include ('connector.php');


// $id_mobil = $_POST['id_mobil'];
// $query=mysqli_query($connect, "SELECT * FROM showroom_ida_table WHERE id_mobil='$id_mobil'");
// $record = mysqli_fetch_array($query);

if(isset($_POST['Simpan']))
{	
//     var_dump($id_mobil);
//     // $id_mobil = $_GET['id_mobil'];
//     $nama_mobil = $_POST['nama_mobil'];
//     // $pemilik_mobil = $_GET['pemilik_mobil'];
//     // $merk_mobil = $_GET['merk_mobil'];
//     // $tanggal_beli = $_GET['tanggal_beli'];
//     // $deskripsi = $_GET['deskripsi'];
//     // $foto_mobil = $_FILES['foto_mobil']['name'];
//     // $status_pembayaran = $_GET['status_pembayaran'];
        
//     // update user data
//     mysqli_query($connect, "UPDATE showroom_ida_table SET 
    
//     nama_mobil='$nama_mobil'
  
    
//     WHERE id_mobil='$id_mobil'");

//     echo "Data Berhasil Diupdate!";
//     var_dump($id_mobil);
//     //echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Ida.php'>";
// }
// else{
//     echo "DATA TIDAK BERHASIL DIUPDATE!";
//     var_dump($nama_mobil);
//     //echo "<meta http-equiv=refresh content=2;URL='../pages/ListCar-Ida.php'>";
// }
//header("Location:../pages/ListCar-Ida.php");




    $id_mobil = $_POST['id_mobil'];
    $nama_mobil = $_GET['nama'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $update = mysqli_query($connect, "UPDATE showroom_ida_table SET 
    nama_mobil='$nama_mobil',
    pemilik_mobil='$pemilik_mobil',
    merk_mobil='$merk_mobil',
    tanggal_beli='$tanggal_beli', 
    deskripsi='$deskripsi' ,
    foto_mobil='$foto_mobil' ,
    status_pembayaran='$status_pembayaran'
    
    WHERE id_mobil='$id_mobil'");

    if( $update ) {
        // header('Location:../pages/ListCar-Ida.php');
        echo "DATA BERHASIL HARUSNYA";
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
}else {
    die("Akses dilarang...");
}


?>