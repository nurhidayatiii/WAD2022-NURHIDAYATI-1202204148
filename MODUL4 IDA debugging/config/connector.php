
<?php

    $connect = mysqli_connect("localhost", "root", "", "wad_modul4_ida");

    if(mysqli_connect_errno()) {
        echo "Koneksi gagal : ".mysqli_connect_error();
    }
?>

