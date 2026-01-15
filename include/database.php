 <?php
session_start();
$servername = "localhost";
$username = "varco_user";
$password = "varco_user@123";
$dbname = "easeopsc_varco_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 