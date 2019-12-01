<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "twitter_db";

global $conn;
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    return $result;
    /*if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }*/
}
?>