<?php
include "../conn/conn.php";

$email = $_POST["email"];
$pass = $_POST["pass"];
$errors = [];

// print_r($email);
// print_r($pass);
// exit();





if (empty($email)) {
    $errors["email"] = "Заполните поле email";
}
else if (!preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $email)) {
    $errors["email"] = "Некорректный email";    
}
else if (empty($pass)) {
    $errors["pass"] = "Заполните поле Пароль";
}
else if (strlen($pass) < 3) {
    $errors["pass"] = "Пароль должен быть больше 3 символов";
}

else {
    $pass = md5($pass);
    $sql = "SELECT * FROM users WHERE email = '$email' and pass = '$pass';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["email"] = $user["email"];
        header("Location: ../books.php");
        exit();
    } else {
        $errors["email"] = "Неверный email или пароль";
        $errors["pass"] = "Неверный email или пароль";
    }
}
$_SESSION["errors"] = $errors;
header("Location: ../index.php");
?>