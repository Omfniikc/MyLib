<?php
include "./conn/conn.php";
$book_id = $_GET["book_id"];

$sql = "SELECT books.*, janrs.name as janr_name FROM `books` INNER JOIN janrs on books.janr_id = janrs.janr_id WHERE book_id = $book_id;";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
include "./templates/header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление-Моя библиотека</title>
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Основной интерфейс после авторизации -->
    <div class="app-container" id="app-interface">
        <!-- Шапка -->
        <header class="app-header">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-book-open"></i>
                    <h1>Моя библиотека</h1>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li class="active"><a href="books.php"><i class="fas fa-home"></i> Главная</a></li>
                        <li><a href="add_book.php"><i class="fas fa-plus"></i> Добавить книгу</a></li>
                        <li><a href="php_exit.php" id="logout-btn"><i class="fas fa-sign-out-alt"></i> Выход</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Основное содержимое -->
        <main class="main-content">
            <div class="container">
                <div class="modal-content confirm-content">
                    <div class="modal-header">
                        <h2>Подтверждение удаления</h2>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить эту книгу "<?=$result['name']?>"? Это действие нельзя отменить.</p>
                        <div class="confirm-actions">
                            <a href="book.php" class="btn btn-secondary">Отмена</a>
                            <a href="./functions/delete_f.php?book_id=<?=$book_id?>" class="btn btn-danger">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>