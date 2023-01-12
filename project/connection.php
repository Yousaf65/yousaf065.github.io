<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "peakandplanting";

// create connection
$conn =mysqli_connect($servername,$username,$password,$db );

//check connection
if(! $conn)
{
    echo"connection is faild";
}
else
{
    echo"connected successfully";
}
?>