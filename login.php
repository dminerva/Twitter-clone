<?php
ob_start();
session_start();
include 'db_connector.php';

$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

$sql = "select * from users where username = '$username' and password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
        $_SESSION["username"] = $username;

        header("Location: home.php");
	}
	
}

echo "ERROR: No account found."; 
echo "<a href='index.php'>Back</a>";
$conn->close();
?>