<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книги-Моя библиотека</title>
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
                        <li><a href="./functions/logout_f.php" id="logout-btn"><i class="fas fa-sign-out-alt"></i> Выход</a></li>
                    </ul>
                </nav>
            </div>
        </header>