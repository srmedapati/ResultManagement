<?php
$servername="localhost";
$username="root";
$password="";
$dbname="srms";
$con= mysqli_connect($servername,$username,$password,$dbname);
if (!$con)
{
    echo("Connection Failure");
    die('Error: ' . mysqli_error(mysqli_connect()));
}
?>
