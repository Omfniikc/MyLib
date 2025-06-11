<?php
include "../conn/conn.php";

$uploadFile = './media/img/'.$_SESSION["user_id"].' '.time();
$user_id = $_SESSION['user_id'];

$title = $_POST["book-title"];
$author = $_POST["book-author"];
$genre = $_POST["book-genre"];
$year = $_POST["book-year"];
$description = $_POST["book-description"];
$errors = [];

print_r($year);

if (empty($title)) {
    $errors["title"] = "Заполните поле Название";
} else if (strlen($title) > 100) {
    $errors["title"] = "Название не должно превышать 100 символов";
} else if (empty($author)) {
    $errors["author"] = "Заполните поле Автор";
} else if (strlen($author) > 100) {
    $errors["author"] = "Автор не должен превышать 100 символов";
} else if (empty($genre) || $genre == 0) {
    $errors["genre"] = "Выберите жанр";
} else if (empty($year)) {
    $errors["year"] = "Заполните поле Год издания";
} else if (1800 > $year or $year > date("Y")) {
    $errors["year"] = "Год издания должен быть между 1800 и текущим годом";
} else if (strlen($description) > 500) {
    $errors["description"] = "Описание не должно превышать 500 символов";
} else if (!isset($_FILES["file"]) || $_FILES["file"]["error"] == UPLOAD_ERR_NO_FILE) {
    $errors["file"] = "Выберите файл для загрузки";
} else if ($_FILES["file"]["size"] == 0) {
    $errors["file"] = "Файл не должен быть пустым";
} else if (!is_uploaded_file($_FILES["file"]["tmp_name"])) {
    $errors["file"] = "Файл не был загружен корректно";
} else if ($_FILES["file"]["size"] > 3*1024*1024) {
    $errors["file"] = "Размер файла не должен превышать 3 МБ";
} else if (!in_array($_FILES["file"]["type"], ["image/jpg"])) {
    $errors["file"] = "Недопустимый тип файла. Допустимы только JPG";
} else if ($_FILES["file"]["error"] > 0 or !move_uploaded_file($_FILES["file"]["tmp_name"], '.'.$uploadFile) or !$_FILES["file"]) {
    $errors["file"] = "Ошибка при загрузке файла";
} else {
    $user_id = $_SESSION["user_id"];
    $sql = "INSERT INTO books (name, author, janr_id, year, description, img, user_id) VALUES ('$title', '$author', '$genre', '$year', '$description', '$uploadFile', '$user_id')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: ../books.php");
        exit();
    } else {
        $errors["db"] = "Ошибка при добавлении книги: " . mysqli_error($conn);
    }
}
print_r($errors);
$_SESSION["errors"] = $errors;
header("Location: ../add_book.php");

?>