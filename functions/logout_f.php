<?php
include "../conn/conn.php";

$_SESSION["user_id"] = null;
$_SESSION["email"] = null;


header("Location: ../index.php");
?>