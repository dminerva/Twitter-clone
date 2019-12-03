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
    //result has to return tweets of all those who user follows
    //get all users follows
    $result = query("select follows from followers where user_id=$userID");
    //print_r($result);
    $count = mysqli_num_rows($result);
    //print $count;

    //query tweets for all tweets where uid is an id from result
    $array = $result->fetch_all();
    $condition = implode(',',$array);    
    ?>    
    </table>
</body>
</html>