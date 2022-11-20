
<?php

    $connect = mysqli_connect("localhost", "root", "", "modul3");

    if(mysqli_connect_errno()) {
        echo "Koneksi gagal : ".mysqli_connect_error();
    }
?>

<!-- 
include('connector.php');

    $id_mobil = $_GET['id_mobil'];

    $select = mysqli_query ($conn, "SELECT * FROM showroom_ida_table WHERE id_mobil  = '$id_mobil’");

    $show = mysqli_fetch_assoc($select); -->