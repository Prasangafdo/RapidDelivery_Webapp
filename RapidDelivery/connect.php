<?php
$db_name = "company";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($con){
echo "DB connection success!";
}

else
echo "Connection failed!";

?>