<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kayit";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$password = password_hash('gsli1905', PASSWORD_DEFAULT);

$sql = "UPDATE admins SET password = '$password'";

mysqli_query($conn, $sql);
echo "başarılı";
?>