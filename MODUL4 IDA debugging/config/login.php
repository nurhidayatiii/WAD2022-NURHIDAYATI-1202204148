



<?php 
include('connector.php');
if (isset($_POST["Login"])){

	$email = $_POST["email"];
	$password = $_POST["password"];

	$query=mysqli_query($connect, "SELECT * FROM user_ida WHERE email = '$email'");

	if (mysqli_num_rows($query) === 1 ) {

		$row = mysqli_fetch_assoc($query);
		if ($password === $row["password"]){
			header("Location: ../pages/Home-Ida.php");
			
		}
        else{
            echo"<script>alert('Gagal Login')</script>";
            echo"<meta http-equiv='refresh' content='1 url=../pages/Home-Ida.php'>";
        }
	}
	
}
?>




<!-- 
<?php

if(!isset($_SESSION)){
    session_start();
}
require 'connector.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user_ida WHERE email='$email'";
$record = mysqli_query($connect, $query);

if(mysqli_num_rows($record)== 1){
    $result = mysqli_fetch_assoc($record);

    if(password_verify($password, $result['password'])) {
        $_SESSION['email'] == $result['email'];
        $_SESSION['message'] = 'Anda berhasil login!';
        header('location : ../pages/Home-Ida.php');
        exit();
    }else{
        $_SESSION['message-error'] = "Password Anda salah, silakan coba lagi";
        header('location : ../pages/Login-Ida.php');
        exit();
    }
}
$_SESSION['message-error'] = 'Gagal Login';
header('location : ../pages/Login-Ida.php');
exit();


?> -->