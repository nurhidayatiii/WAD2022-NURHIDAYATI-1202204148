

<?php
    include ('connector.php'); 

    $id_mobil = $_GET['id_mobil'];
    $query = mysqli_query($connect, "DELETE from showroom_ida_table where id_mobil = $id_mobil");

    if ($query) {

        echo '<script language="javascript" type="text/javascript">;
        alert("data berhasil di hapus!");</script>';
        echo "<meta http-equiv='refresh' content='2; url=index.php'>";
        
    } else{
        echo "<script> alert ('data TIDAK BERHASIL ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=ListCar-Ida.php'>";
    }


    

    header("Location : ListCar-Ida.php")

?>