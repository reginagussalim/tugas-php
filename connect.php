<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "portofolio";

$db = mysqli_connect($host, $username, $password, $database);

if ($db->connect_error){
    die("error!");
}

$sql = "SELECT * FROM blogDetails";
$result = $db->query($sql);

?>