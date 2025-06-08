<?php
include "../conn/conn.php";
$book_id = $_GET["book_id"];

$sql = "SELECT books.*, janrs.name as janr_name FROM `books` INNER JOIN janrs on books.janr_id = janrs.janr_id WHERE book_id = $book_id;";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql = "DELETE FROM books WHERE book_id = $book_id;";
mysqli_query($conn, $sql);
// print_r(".".$result['img']);
// unlink(".".$result['img']);

header("Location: ../books.php")
?>