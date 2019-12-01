<?php
ob_start();
session_start();
include 'db_handler.php';

$userID = $_SESSION["userID"];

if(isset($_REQUEST['tweet'])) {
    $tweet = filter_var($_REQUEST['tweet'], FILTER_SANITIZE_STRING);
    $date = Date("Y-m-d H:i:s");

    //insert query
    query("insert into tweets (user_id, tweet, date) values ('".$userID."', '".$tweet."', '".$date."')");    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User home</title>
</head>
<body>
    <form action="profile_page.php">
        <textarea name="tweet" id="tweet"></textarea>
        <input type="submit" value="tweet">
    </form>
    <!---previous tweets-->
    <table>   
    <?php
    $result = query("select * from tweets where user_id='".$userID."' order by date desc");
    while($row = mysqli_fetch_assoc($result)) {
        $tweet = $row['tweet'];
        $date = $row['date'];
        print "<tr><td>".$tweet."</td><td>".$date."</td></tr>";
    }
    ?>    
    </table>
</body>
</html>