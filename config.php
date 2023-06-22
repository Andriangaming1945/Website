<?php 

$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "contact_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Koneksi gagal".mysqli_connect_error());
}

//echo "Koneksi bisa";

?>