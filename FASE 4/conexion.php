 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "BDUNAD301127_32";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Conexion Fallida: " . mysqli_connect_error());
}

mysqli_close($conn);
?>