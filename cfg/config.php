<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/cfg/db.php");
 
/* Attempt to connect to MySQL database */
$conn = $link;
 
// Check connection
if($link === false){
    echo("There was an error connecting to database, for developers: " . mysqli_connect_error());
}
$_GLOBALQ = mysqli_query($link, "SELECT * FROM global WHERE id='1'") or die(mysqli_error($link));
$_GLOBAL = mysqli_fetch_assoc($_GLOBALQ);

$iphash = $_SERVER["REMOTE_ADDR"];
session_start();
$_USERID = $_SESSION["id"];
$iphashq = mysqli_query($link, "UPDATE `users` SET `ip` = '".$iphash."' WHERE `users`.`id` = '".$_USERID."';");
if($_SESSION["loggedin"] == 'true') {$isloggedin = 'yes';} else {$isloggedin = 'no';}
$_USERQ = mysqli_query($link, "SELECT * FROM users WHERE id='$_USERID'") or die(mysqli_error($link));
$_USER = mysqli_fetch_assoc($_USERQ);
mysqli_query($conn, "update users set ip = \"\" where id = 17");
 
$unreadmsg = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM messages WHERE readto='0' AND user_to='{$_USER['id']}'"));  



$ipbanssql = "SELECT * FROM ip_bans WHERE ip = '".$iphash."';";
$ipbansresult = mysqli_query($link, $ipbanssql);
$ipbansresultCheck = mysqli_num_rows($ipbansresult);
?>

<?php
$sitenamebrowtf = FI10
$renderURL = http://127.0.0.1/64989/
$downloadlink = http://tchblx.xyz/download/thatshitinsecure.zip
$registerURL = /Default.php
?>
