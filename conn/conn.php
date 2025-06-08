<?php
$conn = mysqli_connect("localhost", "root", "8520", "lib");

if (!$conn) {
    echo "Connection failed" ;
} else {
    echo "Connected successfully";
}
session_start();
?>