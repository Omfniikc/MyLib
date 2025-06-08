<?php
include "./conn/conn.php";
$book_id = $_GET["book_id"];

$sql = "SELECT books.*, janrs.name as janr_name FROM `books` INNER JOIN janrs on books.janr_id = janrs.janr_id WHERE book_id = $book_id;";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книга-Моя библиотека</title>
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
                <div class="modal-content book-view-content">
                    <div class="modal-header">
                        <h2><?=$result['name']?></h2>
                    </div>
                    <div class="modal-body">
                        <div class="book-view-container">
                            <div class="book-view-cover">
                                <img src="<?=$result['img']?>" alt="Обложка книги">
                            </div>
                            <div class="book-view-details">
                                <div class="book-view-meta">
                                    <p><strong>Автор:</strong> <span id="view-author"><?=$result['author']?></span></p>
                                    <p><strong>Жанр:</strong> <span id="view-genre"><?=$result['janr_name']?></span></p>
                                    <p><strong>Год издания:</strong> <span id="view-year"><?=$result['year']?></span></p>
                                    <p><strong>Добавлено:</strong> <span id="view-date">date_add</span></p>
                                </div>
                                <div class="book-view-description">
                                    <h3>Описание</h3>
                                    <p ><?=$result['description']?></p>
                                </div>
                                <div class="book-view-actions">
                                    <a href="edit_book.php?book_id=<?=$book["book_id"]?>" class="btn btn-primary"><i class="fas fa-edit"></i> Редактировать</a>
                                    <a href="delete_book.php?book_id=<?=$book["book_id"]?>" class="btn btn-danger"><i class="fas fa-trash"></i> Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>