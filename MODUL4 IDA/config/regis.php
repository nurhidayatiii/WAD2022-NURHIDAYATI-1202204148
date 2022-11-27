
<?php

include('connector.php');

$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$sql = "INSERT INTO user_ida( nama, email, password, no_hp) 
                    VALUES ( '$nama', '$email', '$password', '$no_hp')";
$sql_cek = "SELECT email FROM user_ida WHERE email = '$email'";
$cek = $connect->query($sql_cek);

if(mysqli_query($connect, $sql)){
    session_start();
    $_SESSION['register'] = 'berhasil';
    header("Location : ../pages/Login-Ida.php");
}
else{
    header("Location : ../pager/Register-Ida.php");
}

if($cek -> num_rows > 0){
    session_start();

    while($row = $cek-> fetch_assoc()){
        $email = $_POST['email'];
        $email_cek = $row['email'];
        $nama = $row['nama'];
        $id = $row['id'];
    }

    if($email == $email_cek){
        $_SESSION['register'] = 'gagal';
        header("Location : ../pages/Register-Ida.php");
    }
}

$connect->close();

?>